<?php

/*
Plugin Name: Magic 8 ball
Plugin URI: http://zvoid.com/blog3/
Description: the allmighty Magic 8 ball make your users have fun :)
Author: renon
Version: 1
Author URI: http://8ball.com/
*/




$prefix="snlx_";




function widget_magic8ball($args) {

	global $prefix;
	
	
	


        echo($args["before_widget"].$args["before_title"].$args["widget_name"].$args["after_title"]);


?>

	<div>

	<iframe src="http://zvoid.com/8ball/" id="magic8ball" style="width:150px;height:150px;" frameborder="no" scrolling="no" width="150px" height="150px"></iframe>
	
	</div>

<?

	echo($args["after_widget"]);

}





function widget_magic8ball_control() {
global $optionsArrays;

if($_SERVER["REQUEST_METHOD"]=="POST") {

?>


<?php

exit();

}

?>


<?

}





function widget_magic8ball_init() {


	global $optionsArrays, $prefix;

	foreach($optionsArrays AS $ok=>$ov) {

		if (!get_option($prefix.$ok)) {

			update_option($prefix.$ok, $ov);

		}

	}

	register_sidebar_widget("magic 8 ball", "widget_magic8ball");

	register_widget_control("magic 8 ball", "widget_magic8ball_control");

}



add_action("plugins_loaded", "widget_magic8ball_init");



?>