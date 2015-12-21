<?php
/**
 * Created by PhpStorm.
 * User: csibi
 * Date: 2013.11.15.
 * Time: 11:35
 */

$from = 'comment';
if (isset($runner->context['model_reference'])) {
	$where = array(
		'model_reference = ?' => $runner->context['model_reference'],
	);
	if (isset($runner->context['reply'])) {
		$where['reply = ?'] = $runner->context['reply'];
	} else {
		$where['reply = 0'] = null;
	}
} else {
	$where = $runner->context;
}

$orderBy = 'date DESC';
$primary_key = 'id';
$force_list = true;
