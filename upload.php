<?php
if(isset($_FILES['file']))
{
	$file = $_FILES['file'];

	//Properties
	$file_name = $file['name'];
	$file_tmp = $file['tmp_name'];
	$file_size = $file['size'];
	$file_error = $file['error'];

	//file extension
	$file_ext = explode('.', $file_name)
	$file_ext = strtolower(end($file_ext));

	$allowed = array('cpp', 'java', 'py');

	echo $allowed;

}
