<?php
$type = $_REQUEST['type'];
if(isset($type) && $type == 'edit'){
	$content_id = $_REQUEST['c_id'];
	$data	=	getcontentDetail($content_id);
}else{
	$type = 'add';
}

if($_GET['create'] == 'yes'){
	
	$title		=	$_POST['title'];
	$content	=	$_POST['content'];
	$userid		=	$_SESSION['adminId'];
	$created	= 	date("Y-m-d H:i:s");
	
	$sql 	=   "INSERT INTO `content` (`title`, `content`, `created`, `user_id`) VALUES ('$title','$content','$created','$userid')";	
	mysql_query($sql);
	echo "yes";
	exit;
}

if($_GET['update'] == 'yes'){
	$id		=	$_GET['id'];
	$title		=	$_POST['title'];
	$content	=	$_POST['content'];

	
	$sql 	=   "UPDATE content SET title= '$title',content='$content' WHERE c_id = '$id'";	
	mysql_query($sql);
	//echo $id;
	echo "yes";
	exit;
}

?>