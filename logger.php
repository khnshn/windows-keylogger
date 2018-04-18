<?php
$myfile = fopen("log.txt", "a");
if(isset($_GET['log'])){
	fwrite($myfile, $_GET['log'].' '.$_GET['time']."\n");
	fclose($myfile);
}