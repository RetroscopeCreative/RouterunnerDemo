<?php
/**
 * Created by PhpStorm.
 * User: csibi
 * Date: 2013.11.15.
 * Time: 14:52
 */

$site = 'RouterunnerDemo';
$host = 'dev.localhost';
$mail = 'info@retroscope.hu';
$backend_dir = 'RouterunnerCMS';

$db_host = '127.0.0.1';
$db_name = 'RouterunnerDemo';
$db_user = '';
$db_pass = '';

$mail_host = '';
$mail_smtpauth = true;
$mail_port = 465;
$mail_user = '';
$mail_pass = '';
$mail_smtpsecure = 'ssl';
$mail_from = '';
$mail_fromname = '';
$mail_subject = '';

$token_session = 'RouteRunnerDemo_Token';
$token_cookie = 'RouterunnerDemo_Cookie';

$pwd_salt = substr(md5('RouterunnerDemo_Salt'), 0, 21);
$pwd_logarithm = '09';
$pwd_method = 'CRYPT_BLOWFISH';

$runner_config = array(
	// Application
	'mode' => 'production',
	'root' => 'desktop',
	'subdir' => array(
		'backend' => 'admin',
	),
	
	// Version
	'scaffold.version' => null,
	
	// Debugging
	'debug' => false,
	
	// Logging
	'log.writer' => '\Routerunner\Log',
	'log.enabled' => true,
	
	// View
	'scaffold' => 'scaffold',
	
	// Site
	'SITE' => $site,
	'SITENAME' => $site,
	'SITEROOT' => '',
	'DOCUMENT_ROOT' => $_SERVER['DOCUMENT_ROOT'] . '/',
	'BASE' => 'http://' . $host . '/',
	'BACKEND_DIR' => $backend_dir,
	'BACKEND_ROOT' => $backend_dir . '/',
	'MEDIA_ROOT' => 'content/',
	'UPLOAD_ROOT' => 'upload/',
	'media_access' => array(
		'files' => array(
			'upload' => true,
			'delete' => true,
			'copy'   => true,
			'move'   => true,
			'rename' => true
		),
		'dirs' => array(
			'create' => true,
			'delete' => true,
			'rename' => true
		)
	),
	'TITLE' => $site,
	'EMAIL' => $mail,
	
	// Database
	'DB_HOST' => $db_host,
	'DB_NAME' => $db_name,
	'DB_USER' => $db_user,
	'DB_PASS' => $db_pass,
	'DB_PREFIX' => '_',
	'PREFIX' => '_',
	'DB_CHARSET' => 'utf8',
	'LANG' => 'hu',
	
	// Mail
	'Mail.Host' => $mail_host,
	'Mail.SMTPAuth' => $mail_smtpauth,
	'Mail.Port' => $mail_port,
	'Mail.Username' => $mail_user,
	'Mail.Password' => $mail_pass,
	'Mail.SMTPSecure' => $mail_smtpsecure,
	'Mail.From' => $mail_from,
	'Mail.FromName' => $mail_fromname,
	'Mail.WordWrap' => 50,
	'Mail.CharSet' => 'UTF-8',
	'Mail.Subject' => $mail_subject,
	
	// User
	'User.UserFlashVar' => 'member',
	'User.UserArrayToTranslate' => array(),
	'User.RememberMeVar' => 'rememberme',
	'User.DefaultGroup' => 1,
	'User.DefaultUniqueScope' => null,
	'User.DefaultUniqueAuth' => null,
	'User.TokenSet' => array('email', 'HTTP_USER_AGENT'),
	'User.TokenExpire' => null,
	'User.TokenUserData' => array('REMOTE_ADDR', 'HTTP_USER_AGENT', 'HTTP_REFERER'),
	'User.TokenSession' => $token_session,
	'User.TokenCookie' => $token_cookie,
	'User.TokenCookieExpire' => 7776000, // = 90*24*60*60
	
	// Pwd
	'pwd_salt' => $pwd_salt,
	'pwd_logarithm' => $pwd_logarithm,
	'pwd_method' => $pwd_method,


	// opencart
	'oc_lang' => 1,
	'opencart.language' => array(1 => 'en', 2 => 'hu'),
	
	// Backend property data
	'property.label' => array(
		'type' => 'contenteditable',
		'is_label' => true,
		'mandatory' => array(
			'value' => true,
			'msg' => 'Mandatory field!',
		),
		'regexp' => array(
			'value' => '^.{3,}$',
			'options' => 'i',
			'msg' => 'Invalid format!',
		),
		'control' => array(
			'event' => array(
				'inline' => 'keyup',
				'panel' => 'change',
			),
			'value' => array(
				'inline' => 'html',
				'panel' => 'val',
			),
		),
		'input' => false,
		'output' => false,
	),
	'property.date' => array(
		'type' => 'date',
		'input' => "strtotime",
		'output' => false,
	),
	'property.lead' => array(
		'type' => 'ckeditor',
		'is_description' => true,
		'mandatory' => array(
			'value' => true,
			'msg' => 'Mandatory field!',
		),
		'control' => array(
			'init' => array(
				'inline' => 'init',
				'panel' => 'panel_init',
			),
			'event' => array(
				'inline' => 'inline_customevent',
				'panel' => 'panel_customevent',
			),
			'value' => array(
				'inline' => 'html',
				'panel' => 'ckhtml',
			),
		),
		'input' => false,
		'output' => false,
	),
	'property.tag' => array(
		'type' => 'select',
		'class' => 'select2',
		'multiple' => 'multiple',
		'delimiter' => ';',
		'is_keywords' => true,
		'SQL' => 'SELECT url, label FROM tag ORDER BY url',
		'control' => array(
			'init' => array(
				'inline' => 'inline_init',
				'panel' => 'panel_init',
			),
			'event' => array(
				'inline' => 'change',
				'panel' => 'change',
			),
			'value' => array(
				'inline' => 'inline_value',
				'panel' => 'panel_value',
			),
		),
		'input' => false,
		'output' => false,
	),
	'property.category' => array(
		'type' => 'select',
		'class' => 'select2',
		'multiple' => '',
		'is_keywords' => true,
		'SQL' => 'SELECT url, label FROM category ORDER BY url',
		'control' => array(
			'init' => array(
				'inline' => 'inline_init',
				'panel' => 'panel_init',
			),
			'event' => array(
				'inline' => 'change',
				'panel' => 'change',
			),
			'value' => array(
				'inline' => 'inline_value',
				'panel' => 'panel_value',
			),
		),
		'input' => false,
		'output' => false,
	),
	'property.leadimage' => array(
		'type' => 'image_focus',
		'default' => 'RouterunnerCMS/placeholder/700x450',
		'mediasize' => '',
		'max-width' => 700,
		'max-height' => 450,
		'margin-left' => '0px',
		'control' => array(
			'event' => array(
				'inline' => 'null',
				'panel' => 'null',
			),
			'value' => array(
				'inline' => 'inline_browsed',
				'panel' => 'panel_browsed',
			),
			'selector' => array(
				'inline' => 'img',
			),
			'init' => array(
				'inline' => 'inline_init',
				'panel' => 'panel_init',
			),
			'apply' => 'applycrop',
		),
		'input' => false,
		'output' => false,
	),
	'property.contentimage' => array(
		'type' => 'image_focus',
		'default' => 'Routerunner/placeholder/1600x600',
		'mediasize' => '',
		'max-width' => 1600,
		'max-height' => 600,
		'margin-left' => '0px',
		'control' => array(
			'event' => array(
				'inline' => 'null',
				'panel' => 'null',
			),
			'value' => array(
				'inline' => 'inline_browsed',
				'panel' => 'panel_browsed',
			),
			'selector' => array(
				'inline' => 'img',
			),
			'init' => array(
				'inline' => 'inline_init',
				'panel' => 'panel_init',
			),
			'apply' => 'applycrop',
		),
		'input' => false,
		'output' => false,
	),
	'property.type.text' => array(
		'type' => 'ckeditor',
		'mandatory' => array(
			'value' => false,
		),
		'control' => array(
			'init' => array(
				'inline' => 'init',
				'panel' => 'panel_init',
			),
			'event' => array(
				'inline' => 'inline_customevent',
				'panel' => 'panel_customevent',
			),
			'value' => array(
				'inline' => 'html',
				'panel' => 'ckhtml',
			),
		),
		'input' => false,
		'output' => false,
	),
	'property.type.char' => array(
		'type' => 'contenteditable',
		'control' => array(
			'event' => array(
				'inline' => 'keyup',
				'panel' => 'change',
			),
			'value' => array(
				'inline' => 'html',
				'panel' => 'val',
			),
		),
		'input' => false,
		'output' => false,
	),
	'property.type.bool' => array(
		'type' => 'checkbox',
		'control' => array(
			'event' => array(
				'inline' => 'click',
				'panel' => 'change',
			),
			'value' => array(
				'inline' => 'val',
				'panel' => 'val',
			),
		),
		'input' => false,
		'output' => false,
	),
	'property.type.int' => array(
		'type' => 'int',
		'control' => array(
			'event' => array(
				'inline' => 'keyup',
				'panel' => 'change',
			),
			'value' => array(
				'inline' => 'html',
				'panel' => 'val',
			),
		),
		'input' => false,
		'output' => false,
	),
	'property.type.select' => array(
		'type' => 'select',
		'class' => 'select2',
		'multiple' => '',
		'is_keywords' => false,
		'control' => array(
			'init' => array(
				'inline' => 'inline_init',
				'panel' => 'panel_init',
			),
			'event' => array(
				'inline' => 'change',
				'panel' => 'change',
			),
			'value' => array(
				'inline' => 'inline_value',
				'panel' => 'panel_value',
			),
		),
		'input' => false,
		'output' => false,
		'options' => array(),
		'help' => array(
			'panel' =>'<p>Samples can be found on this page: <a href="http://sample.com/page" target="_blank">http://sample.com/page</a></p>',
		),
	),
	'property.type.image' => array(
		'type' => 'image_focus',
		'default' => 'Routerunner/placeholder/700x450',
		'mediasize' => '',
		'max-width' => 700,
		'max-height' => 450,
		'margin-left' => '0px',
		'control' => array(
			'event' => array(
				'inline' => 'null',
				'panel' => 'null',
			),
			'value' => array(
				'inline' => 'inline_browsed',
				'panel' => 'panel_browsed',
			),
			'selector' => array(
				'inline' => 'img',
			),
			'init' => array(
				'inline' => 'inline_init',
				'panel' => 'panel_init',
			),
			'apply' => 'applycrop',
		),
		'input' => false,
		'output' => false,
	),

	// property defaults
	'default.label' => 'new element label',
	'default.name' => 'new element name',
	'default.date' => time(),
	'default.description' => '<p>new element description</p>',
	'default.lead' => '<p>new element lead</p>',
	'default.content' => '<p>new element content</p>',
	'default.addon_class' => '',
	'default.icon_class' => '',
	'default.company' => '',
	'default.position' => '',
	'default.url' => '',
	'default.public' => '1',
	'default.code' => '',
	'default.lang' => '1',
	'default.category' => '',
	'default.tag' => '',
	'default.author' => 'author',
	'default.price' => '0',
	'default.currency' => 'Ft',
	'default.link' => '#',
	'default.button' => 'Read more',
	'default.videourl' => '',
	'default.downloadurl' => '',
	'default.html_code' => '',
	'default.email' => '',
	'default.phone' => '',
	'default.mobile' => '',
	'default.contact' => '',
	'default.other_contact' => '',
	'default.subject' => '',
	'default.comment' => '',
	'default.model_reference' => '',
	'default.rate' => '5',
	'default.option' => '',
	'default.reply' => '0',
	'default.leadimage' => 'Routerunner/placeholder/900x300',
	'default.data_leadimage' => '{"src": "Routerunner/placeholder/900x300", "x": 0, "y": 0, "width": 900, "height": 300, "rotate": 0, "canvasData": {}}',
	'default.contentimage' => 'Routerunner/placeholder/900x300',
	'default.data_contentimage' => '{"src": "Routerunner/placeholder/900x300", "x": 0, "y": 0, "width": 900, "height": 300, "rotate": 0, "canvasData": {}}',
	'default.thumbnail' => 'Routerunner/placeholder/900x300',
	'default.data_thumbnail' => '{"src": "Routerunner/placeholder/900x300", "x": 0, "y": 0, "width": 900, "height": 300, "rotate": 0, "canvasData": {}}',
	'default.image' => 'Routerunner/placeholder/900x300',
	'default.data_image' => '{"src": "Routerunner/placeholder/900x300", "x": 0, "y": 0, "width": 900, "height": 300, "rotate": 0, "canvasData": {}}',
	'default.avatar' => 'Routerunner/placeholder/300x300',
	'default.data_avatar' => '{"src": "Routerunner/placeholder/300x300", "x": 0, "y": 0, "width": 300, "height": 300, "rotate": 0, "canvasData": {}}',
	'default.photo' => 'Routerunner/placeholder/200x200',
	'default.data_photo' => '{"src": "Routerunner/placeholder/200x200", "x": 0, "y": 0, "width": 200, "height": 200, "rotate": 0, "canvasData": {}}',
	'default.logo' => 'Routerunner/placeholder/200x200',
	'default.data_logo' => '{"src": "Routerunner/placeholder/200x200", "x": 0, "y": 0, "width": 200, "height": 200, "rotate": 0, "canvasData": {}}',

	// Newsletter
	'newsletter_mail_html' => <<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<table width="670">
		<tr>
			<td><h1>Newsletter</h1></td>
			<td></td>
		</tr>
		<tr>
			<td colspan="2">
				<p></p>
			</td>
		</tr>
	</table>
</body>
</html>

HTML
	,
);

// Routerunner property
if (!function_exists("rr_property_date")) {
	function rr_property_date($model)
	{
		return strftime('%Y-%m-%d', $model->date);
	}
}
if (!function_exists("rr_property_date_str")) {
	function rr_property_date_str($model) {
		return strftime('%Y. %B %d', $model->date);
	}
}
if (!function_exists("rr_property_tag")) {
	function rr_property_tag($model)
	{
		$delimiter = ";";
		$tag_property = strtolower($model->tag);
		$tags = explode($delimiter, $tag_property);
		if ($tags && count($tags) == 1 && trim($tags[0]) === "") {
			$tags = array();
		}

		$return = '<span class="a_tags">';

		$tag_urls = "";
		foreach ($tags as $tag) {
			$tag_urls .= "'" . trim($tag) . "',";
		}
		$SQLtag = 'SELECT url, label FROM tag WHERE url IN (' . trim($tag_urls, ",") . ')';
		$tag_from_db = array();
		if ($result = \db::query($SQLtag)) {
			foreach ($result as $row) {
				$tag_from_db[$row["url"]] = $row["label"];
			}
		}
		$SQLinsert = 'INSERT INTO tag (url, label) VALUES (:url, :label)';
		$SQLupdate = 'UPDATE media SET tag = :tag WHERE id = :id';

		if ($tags) {
			foreach ($tags as $tag) {
				$tag = trim($tag);
				if (isset($tag_from_db[$tag])) {
					$return .= '<a href="?tag=' . $tag . '" rel="tag">' . $tag_from_db[$tag] . '</a>, ';
				} elseif ($tag) {
					$url = \runner::toAscii(strtolower($tag));
					if (\db::insert($SQLinsert, array(":url" => $url, ":label" => $tag))) {
						$tag_property = str_replace($tag, $url, $tag_property);
						\db::query($SQLupdate, array(":tag" => $tag_property, ":id" => \model::property("table_id")));
						$return .= '<a href="?tag=' . $url . '" rel="tag">' . $tag . '</a>, ';
					}
				}
			}
			$return = trim($return, ", ");
			$return .= '</span>';
		}

		if (\runner::config("mode") == "backend") {
			$return .= '<select name="tag" id="tag-' . $model->reference . '" class="frm input form-control" multiple="multiple" style="display: none;">' . PHP_EOL;
			$SQL = 'SELECT url, label FROM tag ORDER BY url';
			if ($options = \db::query($SQL)) {
				foreach ($options as $option) {
					$selected = (in_array($option["url"], $tags)) ? ' selected="selected"' : '';
					$return .= '	<option value="' . $option["url"] . '"' . $selected . '>' . $option["label"] . '</option>' . PHP_EOL;
				}
			}
			$return .= '</select>' . PHP_EOL;
			//$return .= '<link rel="stylesheet" type="text/css" href="' . \runner::config("BASE") . 'Routerunner/metronic/assets/global/plugins/select2/select2.css"/>' . PHP_EOL;
		}

		return $return;
	}
}
if (!function_exists("rr_property_related")) {
	function rr_property_related($model)
	{
		if ($tags = explode(";", $model->tag)) {
			$where_post = array();
			$where_product = array();
			$params = array();
			$i = 0;
			foreach ($tags as $tag) {
				if (trim(addslashes($tag))) {
					$where_post[] = "CONCAT(';', post.tag, ';') LIKE :tag" . $i;
					$where_product[] = "CONCAT(';', product.tag, ';') LIKE :tag" . $i;
					$params[":tag" . $i] = '%;' . trim(addslashes($tag)) . ';%';
					$i++;
				}
			}
			if ($where_post) {
				$SQL = "SELECT type, id FROM (" . PHP_EOL;
				$SQL .= "SELECT 'post' AS type, post.id, post.date FROM post WHERE" . PHP_EOL;
				$SQL .= implode(" OR ", $where_post) . PHP_EOL;
				$SQL .= ") AS related_data" . PHP_EOL;
				$SQL .= "LEFT JOIN `{PREFIX}models` AS models ON models.model_class = related_data.type AND models.table_id = related_data.id" . PHP_EOL;
				$SQL .= "WHERE models.reference <> :reference" . PHP_EOL;
				$SQL .= "ORDER BY related_data.date DESC, related_data.id DESC";
				$params[":reference"] = $model->reference;
				if ($result = \db::query($SQL, $params)) {
					echo '	<h3 class="wg-title">Related posts</h3>' . PHP_EOL;
					echo '	<ul class="wg-popular-posts">' . PHP_EOL;
					foreach ($result as $row) {
						$context = array("id = ?" => $row["id"]);
						\runner::route($row["type"], $context);
					}
					echo '		</ul>' . PHP_EOL;
				}
			}

		}
	}
}
if (!function_exists("rr_property_image")) {
	function rr_property_image($model, $image='leadimage', $args=array()) {
		if (isset($model->$image) && $model->$image) {
			$class = ((isset($args) && $args) ? array_shift($args) : '');

			$label = (isset($model->label) ? $model->label : '');
			if (!$label) {
				$label = (isset($model->name) ? $model->name : '');
			}
			return '<!-- Preview Image -->' . PHP_EOL .
			'<img class="img-responsive rr-' . $model->class . '-' . $image .
			' rr-' . $model->class . '-data_' . $image . ' ' . $class . '" src="' . $model->$image .
			'" alt="' . $label . '" title="' . $label . '">' . PHP_EOL .
			'<hr>' . PHP_EOL;
		}
		return '';
	}
}




if (!function_exists("backend_crypt")) {
	function backend_crypt($code)
	{
		return md5("check-" . $code . "-routerunner-cms-login");
	}
}
if (!function_exists("backend_mode")) {
	function backend_mode(& $backend_uri = false, & $backend_session = false, & $code = false)
	{
		$mode = "production";
		$backend_uri = "backend";
		$backend_session = "routerunner_backend";
		if (isset($_GET[$backend_uri]) && isset($_SESSION[$backend_session])
			&& backend_crypt($_SESSION[$backend_session]) === $_GET[$backend_uri]
		) {
			$mode = "backend";
			//unset($_GET[$backend_uri], $_SESSION[$backend_session]);
		} elseif (class_exists("user") && \user::me()) {
			$mode = "backend";
		}
		$unique = false;
		if (!isset($_SESSION[$backend_session])) {
			$unique = uniqid();
			$_SESSION[$backend_session] = $unique;
		} elseif (isset($_SESSION[$backend_session])) {
			$unique = $_SESSION[$backend_session];
		}
		if ($unique && $mode == 'backend') {
			$code = str_replace("'", "\'", backend_crypt($unique));
			$_SESSION['routerunner-open-script'] = <<<HTML
<script>
	function routerunner_attach(id) {
		if (window.parent && typeof window.parent.routerunner_attach == "function") {
			window.parent.routerunner_attach(id, window);
		} else if (window.top && typeof window.top.routerunner_attach == "function") {
			window.top.routerunner_attach(id, window);
		}
	}
	window.routerunner_backend = '{$code}';
	if (window.settings) {
		window.settings.backend_uri = '{$backend_uri}'
	} else {
		window.settings = {
			'backend_uri': '{$backend_uri}'
		};
	};
	if (window.parent.routerunner && typeof window.parent.routerunner == "object") {
		window.parent.routerunner.update_links();
	}
</script>
HTML;
		}
		return $mode;
	}
}

$_SESSION["runner_config"] = $runner_config;

unset($site, $host, $mail, $db_host, $db_name, $db_user, $db_pass, $mail_host, $mail_smtpauth, $mail_port, $mail_user,
	$mail_pass, $mail_smtpsecure, $mail_from, $mail_fromname, $mail_subject, $token_session, $token_cookie,
	$pwd_salt, $pwd_logarithm, $pwd_method);
