<?php
/**
 * Created by PhpStorm.
 * User: csibi
 * Date: 2015.11.16.
 * Time: 20:36
 */

$contents = array();
$title = "";
$subtitle = "";
if ($current = \bootstrap::get("current")) {
	$type = key($current);
	$type_id = $current[$type];
	if ($model = \model::load(array("resource" => array($type, $type_id)))) {
		$title = $model->label;
	}
}
$bread_str = "<li><a href=\"" . \runner::config("BASE") . "\" title=\"Home\">Home</a></li>";
if ($breadcrumb = \bootstrap::get("breadcrumb")) {
	$i = 0;
	foreach ($breadcrumb as $type => $type_id) {
		$i++;
		$breadcrumb_model = \model::load(array("resource" => array($type, $type_id)));
		if ($i >= count($breadcrumb)) {
			$bread_str .= "<li class=\"active\">" . $breadcrumb_model->label . "</li>";
		} else {
			$bread_str .= "<li><a href=\"" . \model::url(false, $breadcrumb_model) . "\">" . $breadcrumb_model->label . "</a></li>";
		}
	}
}
?>
<!-- Page Heading/Breadcrumbs -->
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header"><?php echo $title; ?>
			<small><?php echo $subtitle; ?></small>
		</h1>
		<ol class="breadcrumb">
			<?php echo $bread_str; ?>
		</ol>
	</div>
</div>
<!-- /.row -->
