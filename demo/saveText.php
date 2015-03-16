<?php 


if (isset($_POST["string"])){
	$myfile = fopen("text.txt", "a") or die("Unable to open file!");
	$txt = $_POST["string"];
	fwrite($myfile, $txt);
	fclose($myfile);
}
 ?>
