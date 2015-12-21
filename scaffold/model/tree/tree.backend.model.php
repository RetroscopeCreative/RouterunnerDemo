<?php
/**
 * Created by PhpStorm.
 * User: csibi
 * Date: 2015.04.07.
 * Time: 16:33
 */
return array(
	//'treeroot' => -1 * \runner::config("language"),
	//'traverse' => array('home'),
	//'wrapper_element' => 'wrap',
	'wrapper_class' => 'rr-tree',
	'child_selector' => '.rr-tree-model',
	//'wrapper_attr' => array('style' => 'border: 1px solid #900;'),
	'fields' => array(
		'label' => array_merge(\runner::config("property.label"), array(
			'selector' => '.rr-tree-label',
		)),
		'url' => array_merge(\runner::config("property.type.char"), array(
			'selector' => '.rr-tree-url',
		)),
		'public' => array_merge(\runner::config("property.type.bool"), array(
			'selector' => '.rr-tree-public',
		)),
		'lang' => array_merge(\runner::config("property.type.int"), array(
			'selector' => '.rr-tree-lang',
		)),
	),
);