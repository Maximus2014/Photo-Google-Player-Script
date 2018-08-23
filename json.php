<?php
header('Content-Type: application/json');
	error_reporting(0);
	include "gp.php";
	$url = isset($_GET['url']) ? htmlspecialchars($_GET['url']) : null;
	$json = linkGrab($url);
	echo $json;
  ?>
