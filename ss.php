<?php
$requestType = $_SERVER['REQUEST_METHOD'];
$trial = 3;
$left = (date("d") - $trial) * 3600;
$hour = ($left / 24) / 3600;
if ($requestType === 'POST') {
	if ($_POST['uname'] == 'admin') {
		if ($_POST['pass'] == 'aghisna12') {
			echo $_POST["aegis"] = "aegis_successed:" . $left;
		} else {
			echo "error!";
		}
	} else {
		echo "Assalamuallaikum wr wb";
	}
} else {
	echo "Assalamuallaikum wr wb";
}
?>