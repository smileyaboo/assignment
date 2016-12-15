<?php
$_SESSION['adminId'] 		= 	'';
$_SESSION['adminName']		=	'';
unset($_SESSION['adminpanelId']);
if(isset($_REQUEST['login'])){
	if($_REQUEST['login'] = 'yes'){
		if($_POST['user'] != '' && $_POST['pass'] != '')
		{
			$data = saveFormData($_POST['user'],$_POST['pass']);
			exit;
		}
	}
	
}
?>