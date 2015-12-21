<div id="header" class="hd-filters">
	<header>
		<ul class="gallery-filters">
			<li class="active"><a data-filter="*" href="#">All</a></li>
			<?php
			$SQL = "SELECT category FROM media GROUP BY category ORDER BY category";
			if ($result = \db::query($SQL)) {
				foreach ($result as $row) {
					echo '			<li><a data-filter="' . $row["category"] . '" href="#">' .
						$row["category"] . '</a></li>' . PHP_EOL;
				}
			}
			?>
			<li class="gf-underline"></li>
		</ul>
	</header>
</div>

<div class="section no-padding">
	<section>
		<ul id="gallery-w-preview" class="gallery gl-cols-4">
