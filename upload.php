<?php
if(isset($_FILES['file']))
{
	$file = $_FILES['file'];
	print_r($file);
}
