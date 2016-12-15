<?php
include('includes/config.php');

	if(isset($_REQUEST['s'])){

		if($_REQUEST['s'] == 'y'){

			unset($_SESSION['adminId']);
			unset($_SESSION['adminpanelId']);
			unset($_SESSION['adminName']);

			unset($_SESSION['role']);

		}

	}

	include('data/index.php');

	include('design/index.php');

?>