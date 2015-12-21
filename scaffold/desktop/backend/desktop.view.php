<script>
	function routerunner_attach(id) {
		if (window.parent && typeof window.parent.routerunner_attach == "function") {
			window.parent.routerunner_attach(id, window);
		} else if (window.top && typeof window.top.routerunner_attach == "function") {
			window.top.routerunner_attach(id, window);
		}
	}
</script>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<?php
\runner::route("head");
?>
<body>

<?php
\runner::route("body");
?>

<?php
\runner::route("foot");
?>

</body>
</html>