<?php

session_start();

if(isset($_POST['name']))
{
	$msg = 'Name: ' .$POST['name'] ."\n"
		.'Email: ' .$POST['inputEmail'] ."\n"
		.'Message: ' ."\n" .$POST['textArea'] ."\n";
	//mail('nathanang2000@gmail.com', 'New Contact Us Form', $msg);
	echo $msg;
}
else
{
	exit(0);
}
?>
