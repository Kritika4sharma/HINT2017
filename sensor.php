<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
	<script src="main.js"></script>
	<script src="key.js"></script>
	<script type="text/javascript" src="webcam.js"></script>
	<script>
		
		function isko_bolo(line){	
			console.log("check");
			var msg = new SpeechSynthesisUtterance(line);
			window.speechSynthesis.speak(msg);
		}

		function test(msg){
			document.write(msg);
		}	
		
	</script>
</head>
<body>


	<?php
	$page = $_SERVER['PHP_SELF'];
 	$sec = "3";
 	//header("Refresh: $sec; url=$page");
	
	//$output = shell_exec('sudo chmod a+rw /dev/ttyACM1');
	//$output = shell_exec('sudo -u root -S chmod a+rw /dev/ttyACM1 < ~/.sudopass/sudopass.secret');
	//echo "<pre>$output</pre>";
	$output = shell_exec('cat -v < /dev/ttyACM0 | tr "\n" " "');
	echo $output;	
	echo "<script>isko_bolo('". $output ."');";
	echo "</script>";
	//echo '<script> console.log("'.$output.'"); </script>';
	//$output = shell_exec('sudo chmod a+rw /dev/ttyACM0');
	//$output = shell_exec('sudo -u root -S chmod a+rw /dev/ttyACM0 < ~/.sudopass/sudopass.secret');
	//echo "<pre>$output</pre>";
	//$output = str_replace(array("\r", "\n"), '', $output);
	$output = shell_exec('cat -v < /dev/ttyACM0 | tr "\n" " "');
	echo $output;	
	//$output = mysql_real_escape_string($output);	
	echo "<script>isko_bolo('". $output ."');";
	echo "</script>";
	echo $output;
		
	
	//isko_bolo($output);
	//echo $output;
	//$hh = $output;
	
	//echo '<script> console.log("'.$output.'"); </script>';	
	//echo '<script> test("txtUsername"); </script>';
	//echo '<script> isko_bolo('. $output . '); </script>';
	$h = "hello";
	//echo '<script> console.log("'.$h.'"); </script>';
	
	?>
	
</body>
</html>







