<!-- Page Content -->
<div class="rr-content-container">

<?php
$resource_uri = \bootstrap::get("resource_url");
$current = \bootstrap::get("current");

$content_header = \runner::return_route("content_header");

$resource = \bootstrap::get("resource");

if (isset($resource[0], $resource[1]) && $resource[0] == "category") {
	$SQL = <<<SQL
SELECT models.reference, found_data.type, found_data.id, found_data.sort_order, found_data.date FROM (
SELECT 'product' AS type, oc_product.product_id AS id, oc_product.sort_order, oc_product.date_added AS date FROM oc_product
LEFT JOIN oc_product_to_category ON oc_product_to_category.product_id = oc_product.product_id
LEFT JOIN oc_category ON oc_category.category_id = oc_product_to_category.category_id
LEFT JOIN oc_url_alias ON oc_url_alias.query = CONCAT('category_id=', oc_category.category_id)
WHERE oc_url_alias.keyword = :category
) AS found_data
LEFT JOIN `{PREFIX}models` AS models ON models.model_class = found_data.type AND models.table_id = found_data.id
ORDER BY found_data.sort_order, found_data.date DESC, found_data.id DESC

SQL;
	$params = array(
		':category' => $resource[1]
	);
	if ($result = \db::query($SQL, $params)) {
		foreach ($result as $row) {
			$contents[$row["reference"]] = array($row["id"] => $row["type"]);
		}
	}
} elseif (isset($_GET["search"])) {
	$SQL = <<<SQL
SELECT models.reference, found_data.type, found_data.id, found_data.date FROM (
SELECT 'post' AS type, post.id, post.date FROM post
WHERE label LIKE :like OR lead LIKE :like OR content LIKE :like OR CONCAT(';',tag,';') LIKE :tag
UNION
SELECT 'product' AS type, product.id, product.date FROM product
WHERE label LIKE :like OR lead LIKE :like OR content LIKE :like OR CONCAT(';',tag,';') LIKE :tag
) AS found_data
LEFT JOIN `{PREFIX}models` AS models ON models.model_class = found_data.type AND models.table_id = found_data.id
ORDER BY found_data.date DESC, found_data.id DESC

SQL;
	$params = array(
		':like' => '%' . $_GET["search"] . '%',
		':tag' => '%;' . $_GET["search"] . ';%',
	);
	if ($result = \db::query($SQL, $params)) {
		foreach ($result as $row) {
			$contents[$row["reference"]] = array($row["id"] => $row["type"]);
		}
	}
} elseif (isset($_GET["tag"])) {
	$SQL = <<<SQL
SELECT models.reference, found_data.type, found_data.id, found_data.date FROM (
SELECT 'post' AS type, post.id, post.date FROM post
WHERE CONCAT(';',tag,';') LIKE :tag
UNION
SELECT 'product' AS type, product.id, product.date FROM product
WHERE CONCAT(';',tag,';') LIKE :tag
) AS found_data
LEFT JOIN `{PREFIX}models` AS models ON models.model_class = found_data.type AND models.table_id = found_data.id
ORDER BY found_data.date DESC, found_data.id DESC

SQL;
	$params = array(
		':tag' => '%;' . $_GET["tag"] . ';%',
	);
	if ($result = \db::query($SQL, $params)) {
		foreach ($result as $row) {
			$contents[$row["reference"]] = array($row["id"] => $row["type"]);
		}
	}
} else {
	$contents = \bootstrap::get("content_children");
}

$header_slider = false;
$page = false;
$section = 1;

if ($current && in_array(key($current), \bootstrap::get("contents"))) {
	if ($content_header) {
		echo $content_header;
		$content_header = '';
	}
	$page = key($current);
	if ($page == "product") {
		$where = array('oc_product.product_id IN (' . current($current) . ')' => null);
	} else {
		$where = array('id IN (' . current($current) . ')' => null);
	}
	\runner::route($page, $where);
} elseif (isset($contents) && $contents) {
	$children = array();
	$current_ref = key($contents);
	$last_ref = false;
	foreach ($contents as $current_ref => $content) {
		if (!$page) {
			$page = current($content);
		} elseif ($page != current($content) && $children) {
			if ($page == "product" && !$header_slider) {
				\runner::route("/desktop/body/contents/shop_header");
				$header_slider = true;
			}
			if ($content_header) {
				echo $content_header;
				$content_header = '';
			}
			$where = array('id IN (' . implode(",", $children) . ')' => null);
			\runner::route($page, $where);
			$children = array();
			$page = current($content);
		}
		$last_ref = $current_ref;
		$children[] = key($content);
	}
	if ($page && $children) {
		if ($page == "product" && !$header_slider) {
			\runner::route("/desktop/body/contents/shop_header");
			$header_slider = true;
		}
		if ($content_header) {
			echo $content_header;
			$content_header = '';
		}
		if ($page == "product") {
			$where = array('oc_product.product_id IN (' . implode(",", $children) . ')' => null);
		} else {
			$where = array('id IN (' . implode(",", $children) . ')' => null);
		}
		\runner::route($page, $where);
	}
} elseif ($resource_uri == "unsubscribe/success") {
	echo '			<div class="row">' . PHP_EOL;
	echo '				<div class="col-md-12">' . PHP_EOL;
	echo '					<h1>Ön sikeresen leiratkozott leveleinkről!<br> Elnézését kérjük a zavarásért, ' .
		'a jövőben erre a címre nem fog tőlünk kapni e-mailt!</h1>' . PHP_EOL;
	echo '				</div>' . PHP_EOL;
	echo '			</div>' . PHP_EOL;
} elseif ($resource_uri == "unsubscribe/error" || strpos($resource_uri, "unsubscribe/") !== false) {
	echo '			<div class="row">' . PHP_EOL;
	echo '				<div class="col-md-12">' . PHP_EOL;
	echo '					<h1><h1>Hiba történt a leiratkozás során!<br>Kérjük írjon a ' .
		'<a href="mailto:web-plasztika@retroscope.hu" target="_blank">web-plasztika@retroscope.hu</a> címre' .
		' és kollégánk rögtön törölni fogja e-mail címét!<br>Elnézését kérjük a zavarásért!</h1>' . PHP_EOL;
	echo '				</div>' . PHP_EOL;
	echo '			</div>' . PHP_EOL;
} elseif ($current && isset($current["menu"]) && $current["menu"] === "1") {
	\runner::route("home");
} elseif (isset($current) && is_array($current) && count($current) === 0 && !\bootstrap::get("url")) {
	\runner::route("home");
} else {
	echo '			<div class="row">' . PHP_EOL;
	echo '				<div class="col-md-12">' . PHP_EOL;
	\runner::route("error404");
	echo '				</div>' . PHP_EOL;
	echo '			</div>' . PHP_EOL;
}
?>
</div>
