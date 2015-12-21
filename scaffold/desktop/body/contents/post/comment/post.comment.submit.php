<?php
/**
 * Created by PhpStorm.
 * User: csibi
 * Date: 2015.07.17.
 * Time: 9:34
 */


$return_SQL = true;
if ($succeed = \Routerunner\Form::submit($runner->form, $errors, $return_SQL, $return_params)) {
	$saved = false;
	if (isset($return_params[":nonce"], $_SESSION["nonce"]) && \Routerunner\Crypt::checker($return_params[":nonce"], $_SESSION["nonce"])) {
		unset($_SESSION["nonce"]);
		if ($id = \db::insert($return_SQL, $return_params)) {
			$saved = true;
			$url = bootstrap::get('resource_url');
			echo <<<HTML
<h1 class="client-form-success text-success">Successfully saved!</h1>
<script>
	setTimeout(function() {
		window.location.href = "{$url}";
	}, 1000);
</script>
HTML;
		}
	}
	if (!$saved) {
		echo '	<h1 class="text-danger">Error happened!</h1>';
	}
} else {
	echo '	<h1 class="text-danger">Error happened!</h1>';
	if ($errors) {
		foreach ($errors as $field => $row) {
			echo '<!--' . $field . '//-->' . PHP_EOL;
			echo $row;
		}
	}
}