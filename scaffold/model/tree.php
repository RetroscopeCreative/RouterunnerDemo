<?php
/**
 * Created by PhpStorm.
 * User: csibi
 * Date: 2015.04.07.
 * Time: 16:45
 */

$basetype = array(
	'inline' => array(
		//'selector' => '',
	),
	'panel' => array(
	),
	'id' => array('%s' => array(array('reference'))),
	'text' => array('<span class="tree-label label label-info">%s</span> (%s/%s)' => array(array('label'), array('class'), array('table_id'))),
	'icon' => 'fa fa-folder icon-state-info',
	'state' => array(
		'opened' => false,
		'disabled' => false,
		'selected' => false,
	),
	'blank' => array(
		'label' => 'new element',
	),
	'children' => array(),
	'li_attr' => array(),
	'a_attr' => array(),
);

$sub_types = array_merge($basetype, array(
	'text' => array('<span class="tree-label label label-warning">%s</span> (%s/%s)' => array(array('label'), array('class'), array('table_id'))),
	'children' => array(
		'comment' => array_merge($basetype, array("icon" => "fa fa-comments-o icon-state-warning")),
		'review' => array_merge($basetype, array("icon" => "fa fa-star-half-o icon-state-warning")),
		'media' => array_merge($basetype, array("icon" => "fa fa-file-image-o icon-state-warning")),
	),
));

$content_types = array_merge($basetype, array(
	'text' => array('<span class="tree-label label label-info">%s</span> (%s/%s)' => array(array('label'), array('class'), array('table_id'))),
	'children' => array(
		'post' => array_merge($sub_types, array("icon" => "fa fa-file-text icon-state-info")),
		'content' => array_merge($sub_types, array("icon" => "fa fa-file-text icon-state-info")),
		'product' => array_merge($sub_types, array("icon" => "fa fa-shopping-cart icon-state-info")),
		'feature' => array_merge($sub_types, array("icon" => "fa fa-puzzle-piece icon-state-info")),
		//'pricing' => array_merge($sub_types, array("icon" => "fa fa-money icon-state-info")),
		'portfolio' => array_merge($sub_types, array("icon" => "fa fa-archive icon-state-info")),
		//'media' => array_merge($sub_types, array("icon" => "fa fa-file-image-o icon-state-info")),
		'team' => array_merge($sub_types, array("icon" => "fa fa-users icon-state-info")),
		//'contact' => array_merge($sub_types, array("icon" => "fa fa-fax icon-state-info")),
		//'testimonial' => array_merge($sub_types, array("icon" => "fa fa-quote-right icon-state-info")),
		//'freecontent' => array_merge($sub_types, array("icon" => "fa fa-asterisk icon-state-info")),
		//'banner' => array_merge($sub_types, array("icon" => "fa fa-barcode icon-state-info")),
	),
));
$content_types['children']['submenu'] = array_merge($content_types, array("icon" => "fa fa-indent icon-state-info"));

$menu_types = array_merge($basetype, array(
	'text' => array('<span class="tree-label label label-success">%s</span> (%s/%s)' => array(array('label'), array('class'), array('table_id'))),
	'children' => array(
		'menu' => array_merge($content_types, array("icon" => "fa fa-bars icon-state-success")),
	),
));

$home_types = array_merge($basetype, array(
	'text' => array('<span class="tree-label label label-success">%s</span> (%s/%s)' => array(array('label'), array('class'), array('table_id'))),
	'children' => array(
		'carousel' => array_merge($sub_types, array("icon" => "fa fa-desktop icon-state-success")),
		//'post' => array_merge($sub_types, array("icon" => "fa fa-file-text icon-state-success")),
		//'product' => array_merge($sub_types, array("icon" => "fa fa-shopping-cart icon-state-success")),
		'feature' => array_merge($sub_types, array("icon" => "fa fa-puzzle-piece icon-state-success")),
		'content' => array_merge($sub_types, array("icon" => "fa fa-file-text icon-state-success")),
		//'media' => array_merge($sub_types, array("icon" => "fa fa-file-image-o icon-state-success")),
		//'team' => array_merge($sub_types, array("icon" => "fa fa-users icon-state-success")),
		//'contact' => array_merge($sub_types, array("icon" => "fa fa-fax icon-state-success")),
		//'freecontent' => array_merge($sub_types, array("icon" => "fa fa-asterisk icon-state-success")),
	),
));

$jstree_types = array(
	'default' => array(
		'max_children' => -1,
		'max_depth' => -1,
		'valid_children' => 'all',
	),
	'tree' => array(
		'max_children' => -1,
		'max_depth' => -1,
		'valid_children' => array('lang'),
	),
	'lang' => array(
		'max_children' => -1,
		'max_depth' => -1,
		'valid_children' => array('menu', 'banner'),
	),
	'#' => array(
		'max_children' => -1,
		'max_depth' => -1,
		'valid_children' => array('menu', 'banner'),
	),
	'menu' => array(
		'max_children' => -1,
		'max_depth' => -1,
		'valid_children' => array('submenu', 'post', 'product', 'feature', 'pricing', 'referencia', 'testimonial', 'media'),
	),
	'submenu' => array(
		'max_children' => -1,
		'max_depth' => -1,
		'valid_children' => array('post', 'product', 'feature', 'pricing', 'referencia', 'testimonial', 'media'),
	),
	'post' => array(
		'max_children' => -1,
		'max_depth' => -1,
		'valid_children' => array('comment'),
	),
	'product' => array(
		'max_children' => -1,
		'max_depth' => -1,
		'valid_children' => array(),
	),
	'video' => array(
		'max_children' => -1,
		'max_depth' => -1,
		'valid_children' => array(),
	),
	'banner' => array(
		'max_children' => -1,
		'max_depth' => -1,
		'valid_children' => array(),
	),
	'feature' => array(
		'max_children' => -1,
		'max_depth' => -1,
		'valid_children' => array(),
	),
	'pricing' => array(
		'max_children' => -1,
		'max_depth' => -1,
		'valid_children' => array(),
	),
	'referencia' => array(
		'max_children' => -1,
		'max_depth' => -1,
		'valid_children' => array(),
	),
	'testimonial' => array(
		'max_children' => -1,
		'max_depth' => -1,
		'valid_children' => array(),
	),
);
$debug = 1;
return array(
	'children' => array(
		'' => $menu_types,
		'home' => array_merge($home_types, array(
			'id' => 'root',
			'text' => 'tree-root',
			'inline' => array(
				'selector' => '.rr-home-container',
			),
		)),
	),
	//'tree' => $jstree_types,
	//'types' => $children_by_type,
);