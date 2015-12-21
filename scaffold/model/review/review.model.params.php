<?php
/**
 * Created by PhpStorm.
 * User: csibi
 * Date: 2013.11.15.
 * Time: 11:35
 */

$from = 'review';
if (isset($runner->context['model_reference'])) {
	$where = array(
		'model_reference = ?' => $runner->context['model_reference'],
	);
} else {
	$where = $runner->context;
}

$orderBy = 'date DESC';
$primary_key = 'id';
$force_list = true;
