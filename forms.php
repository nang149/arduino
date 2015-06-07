<?php

session_start();

if(isset($_GET['name']))
{
	$msg = 'Name: ' .$GET['name'] ."\n"
		.'Email: ' .$GET['inputEmail'] ."\n"
		.'Message: ' ."\n" .$GET['textArea'] ."\n";
	//mail('nathanang2000@gmail.com', 'New Contact Us Form', $msg);
	echo $msg;
}
else
{
	exit(0);
}
?>
