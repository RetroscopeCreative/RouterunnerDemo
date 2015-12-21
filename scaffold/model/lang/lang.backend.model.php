<?php
/**
 * Created by PhpStorm.
 * User: csibi
 * Date: 2015.04.07.
 * Time: 16:33
 */
return array(
	//'treeroot' => -1,
	//'traverse' => array('lang'),
	//'wrapper_element' => 'wrap',
	'wrapper_class' => 'rr-lang',
	'child_selector' => '.rr-lang-model',
	//'wrapper_attr' => array('style' => 'border: 1px solid #900;'),
	'fields' => array(
		'label' => array_merge(\runner::config("property.label"), array(
			'selector' => '.rr-lang-label',
		)),
		'code' => array_merge(\runner::config("property.type.char"), array(
			'selector' => '.rr-lang-author',
		)),
	),
);