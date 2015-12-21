<?php
/**
 * Created by PhpStorm.
 * User: csibi
 * Date: 2015.04.01.
 * Time: 10:39
 */
session_cache_limiter(false);
session_start();

header('Content-type: text/html; charset=utf-8');
// bench start
$bench = array("start"=>array("mem"=>memory_get_usage(), "peak"=>memory_get_peak_usage(true), "time"=>microtime(true)));


require 'runner-config.php';
require 'RouterunnerCMS/Routerunner/Routerunner.php';
use \Routerunner\Routerunner as runner;

$host = $_SERVER['HTTP_HOST'];
$root = 'desktop';
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

$mode = backend_mode();
$debug = 1;

$runner = array(
	//'version' => array('1.001', '1.2', 'menu.pre/0.9'),
	'mode' => $mode,
	//'mode' => 'cms',
	'root' => 'desktop',
	//'silent' => true,
	'language' => $lang,
);

new runner($runner);

backend_mode();

// bench over
$bench["end"] = array("mem"=>memory_get_usage(), "peak"=>memory_get_peak_usage(true), "time"=>microtime(true));
$bench["diff"] = array("mem"=>$bench["end"]["mem"]-$bench["start"]["mem"], "peak"=>$bench["end"]["peak"]-$bench["start"]["peak"], "time"=>$bench["end"]["time"]-$bench["start"]["time"]);
//$bench["load"] = sys_getloadavg();
//echo "<!--".print_r($bench["diff"], true)."\n".print_r($bench["load"],true)."//-->";
echo "<!--".print_r($bench["diff"], true)."\n//-->";
