<?php

if (isset($_POST[submit])) {
	$name = $_POST['name'];
	$mailFrom = $_POST['mail'];
	$message = $_POST['message'];


$mailTo = "contact@bissla.me";
$headers = "From: ".$mailFrom;
$txt = " You have received an e-mail from ".$name.".\n\n".$message;

mail($mailTo, $txt, $headers);
header("location: contact_us.php?mailsend")

}