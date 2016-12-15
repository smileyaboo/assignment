<?php
	
	function checkAdminLogin($adminname, $adminpass)
	{
		$sql = "select * from users where username = '$adminname' AND password = '$adminpass'";
		$res = mysql_query($sql);
	    if(mysql_num_rows($res)>0){
			$admin_arr = mysql_fetch_assoc($res);
			return $admin_arr;
	    }
	    else{
			return -1;
	    }
	}
	function saveFormData($adminname, $adminpass)
	{
		$admin_arr = checkAdminLogin($adminname, $adminpass);
		if($admin_arr == -1){
			echo "no";
		}
		else{
			$_SESSION['test'] 			= 	'Test session var';
			$_SESSION['adminId'] 		= 	$admin_arr['_id'];
			$_SESSION['adminName'] 		= 	$admin_arr['name'];
			echo "123";
			//echo "123 -".$_SESSION['test'].$_SESSION['test1'].' - '.$_SESSION['adminId'].' | ';
		}
		return $admin_arr;
	}
	
	function getContentlist()
	{
		$res = mysql_query("SELECT a.*, b.name FROM content as a LEFT JOIN users as b on b._id = a.user_id ");
		while($result = mysql_fetch_assoc($res))
		{
			$att[] = $result;
		}
		return $att;
	}
	
	function getcontentDetail($id)
	{
		$res = mysql_query("SELECT * FROM content WHERE c_id = '$id' ");
		while($result = mysql_fetch_assoc($res))
		{
			$att[] = $result;
		}
		return $att;
	}
?>	