<?php
/**
 * Created by PhpStorm.
 * User: csibi
 * Date: 2015.07.17.
 * Time: 9:34
 */


$return_SQL = true;
if ($succeed = \Routerunner\Form::submit($runner->form, $errors, $return_SQL, $return_params)) {
	require \runner::config("SITEROOT") . 'Routerunner/plugins/opencart/opencart.php';
	$opencart = new \OpenCart\OpenCart(\runner::config("BASE") . "oc/");

	if ($opencart->login("yoyRUis0nJZYftgmlgwJ5Rubu6GdgToV7dmRCVIpehE9Rlm2IZBDqvfasm4P5ik2", "aCsyIyWjgYyWmAwgkK4mSexXeVujp4VwNx8kgkriKumd2ZUlWRUOjZpvxwoLIF13Y7QfzYuDnMvvCrIuyExzCXiSeJKLPWq4ExQvLkAFPL8RJERqgybji60zTaEYbML20tFN8vCSL5vB8ssWTRx6cISUfpyd5QL6O3WQwLRukJqnZBrNUYRlo6BO4bNA3tK3FEm2BymZmVtNvZUvgOt88rmXoygecHYH0lNrGEvd7GJqfWgXLBxYY7j6U1YsJoT5")) {
		$opencart->cart->add($_POST["product"], $_POST["item"]);
		$cart = $opencart->cart->products();
		foreach ($cart['products'] as $product) {
			echo $product['name']."\n";
		}
	} else {
		echo $opencart->getLastError();
	}

	$order = $opencart->order->add('', '', '', '', 'dasdasd u. 1.');

	$saved = false;
	if (isset($return_params[":nonce"], $_SESSION["nonce"]) && \Routerunner\Crypt::checker($return_params[":nonce"], $_SESSION["nonce"])) {
		unset($_SESSION["nonce"]);

		//OpenCart->order->edit($order_id, $shipping_method = '', $comment = '', $affiliate_id = '', $order_status_id = '')

		if ($id = \db::insert($return_SQL, $return_params)) {
			$saved = true;
			$url = bootstrap::get('resource_url');
			echo <<<HTML
<h1 class="order-form-success text-success">Successfully saved!</h1>
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