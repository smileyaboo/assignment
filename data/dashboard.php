<?php
$contentlist	= getContentlist();

if(isset($_GET['deletecontent']) && $_GET['deletecontent'] == 'yes'){
			
			$did	=	$_POST['dltuid'];
			
			$sql = "DELETE FROM content WHERE c_id =".$did;
			$res = mysql_query($sql);
			
			echo 'yes';
			exit;
}
?>