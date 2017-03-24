<?php
	$page = $_SERVER['PHP_SELF'];
 	$sec = "2";
 	header("Refresh: $sec; url=$page");
	
	//$output = shell_exec('sudo chmod a+rw /dev/ttyACM1');
	$output = shell_exec('sudo -u root -S chmod a+rw /dev/ttyACM1 < ~/.sudopass/sudopass.secret');
	echo "<pre>$output</pre>";
	$output = shell_exec('cat -v < /dev/ttyACM1');
	echo "<pre>$output</pre>";
	
	//$output = shell_exec('sudo chmod a+rw /dev/ttyACM0');
	$output = shell_exec('sudo -u root -S chmod a+rw /dev/ttyACM0 < ~/.sudopass/sudopass.secret');
	echo "<pre>$output</pre>";
	$output = shell_exec('cat -v < /dev/ttyACM0');
	echo "<pre>$output</pre>";
	
?>
