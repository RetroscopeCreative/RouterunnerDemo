<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<?php
\runner::route("head");

if (isset($_SESSION['routerunner-open-script'])) {
	echo $_SESSION['routerunner-open-script'];
	unset($_SESSION['routerunner-open-script']);
}
?>
<body>

<?php
\runner::route("body");
?>

<?php
\runner::route("foot");
?>
<?php
echo \runner::js_after();
?>
</body>
</html>