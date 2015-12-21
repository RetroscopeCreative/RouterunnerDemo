<?php
/**
 * Created by PhpStorm.
 * User: csibi
 * Date: 2015.04.01.
 * Time: 10:47
 */
session_cache_limiter(false);
session_start();

header('Content-type: text/html; charset=utf-8');
// bench start
$bench = array("start"=>array("mem"=>memory_get_usage(), "peak"=>memory_get_peak_usage(true), "time"=>microtime(true)));

require '../runner-config.php';
require '../RouterunnerCMS/Routerunner/Routerunner.php';
use \Routerunner\Routerunner as runner;

$host = $_SERVER['HTTP_HOST'];
$root = 'backend';
if (isset($_GET['root'])) {
	$root = $_GET['root'];
	$_SESSION['root'] = $_GET['root'];
} elseif (isset($_SESSION['root'])) {
	$root = $_SESSION['root'];
}

$lang = false;
if (isset($_GET["lang"]) && $_GET["lang"] == "en") {
	$lang = 2;
} elseif (isset($_GET["lang"]) && $_GET["lang"] == "hu") {
	$lang = 1;
}

$backend_lang = ((isset($_SESSION["backend_lang"]) && in_array($_SESSION["backend_lang"], array("en", "hu")))
	? $_SESSION["backend_lang"] : 'hu');
if (isset($_GET["backend_lang"]) && in_array($_GET["backend_lang"], array("en", "hu"))) {
	$backend_lang = $_GET["backend_lang"];
}
$_SESSION["backend_lang"] = $backend_lang;

$scaffold = '../scaffold';
$tree = (@include $scaffold . '/model/tree.php');

$runner = array(
	//'version' => array('1.1', '1.2', 'menu.pre/0.9'),
	'mode' => 'backend',
	'scaffold' => 'scaffold',
	'root' => '..' . DIRECTORY_SEPARATOR . 'RouterunnerCMS' . DIRECTORY_SEPARATOR . 'scaffold' . DIRECTORY_SEPARATOR . $root,
	'second_root' => '..' . DIRECTORY_SEPARATOR . 'scaffold' . DIRECTORY_SEPARATOR . 'desktop',
	'editpage' => 'desktop',
	'tree' => $tree,
	//'silent' => true,
	'backend_language' => $backend_lang,
	'language' => $lang,
	'LANG' => $backend_lang,
);

new runner($runner);

// bench over
$bench["end"] = array("mem"=>memory_get_usage(), "peak"=>memory_get_peak_usage(true), "time"=>microtime(true));
$bench["diff"] = array("mem"=>$bench["end"]["mem"]-$bench["start"]["mem"], "peak"=>$bench["end"]["peak"]-$bench["start"]["peak"], "time"=>$bench["end"]["time"]-$bench["start"]["time"]);
//$bench["load"] = sys_getloadavg();
//echo "<!--".print_r($bench["diff"], true)."\n".print_r($bench["load"],true)."//-->";
echo "<!--".print_r($bench["diff"], true)."\n//-->";