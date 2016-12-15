<?php
session_start();
	include_once("model/access.php");
       error_reporting(E_ALL);
	   error_reporting(E_ERROR|E_PARSE);
	
    if(($_SESSION['adminId']<=0))
	{
		//$_SESSION['test1'] 	= 	'Test session var1';
		//echo 'SESSION ID - '.$_SESSION['test'].$_SESSION['test1'].' - '.$_SESSION['adminId'].' }} ';
    	$query = $_SERVER['PHP_SELF'];
		$path = pathinfo( $query );
		$filePath = $path['basename'];
		if($filePath != "index.php"){
    		header("Location: index.php");
		}
    }
	
    $link	=	mysql_connect("localhost","root","") or die("DB Connection can't be established");
    mysql_select_db("aboo") or die("DB not found");
	mysql_set_charset('utf8',$link);
?>