
<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Script to Activate the Carousel -->
<script>
	$('.carousel').carousel({
		interval: 5000 //changes the speed
	})
</script>

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
	// (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
	// function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
	// e=o.createElement(i);r=o.getElementsByTagName(i)[0];
	// e.src='//www.google-analytics.com/analytics.js';
	// r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
	// ga('create','UA-XXXXX-X');ga('send','pageview');
</script>
<?php
$bootstrap = \bootstrap::get();
echo $bootstrap->js_components;
