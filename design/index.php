<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Assignmet fom IBT | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script type="text/javascript">
	function valid()
	{
		var user=document.login.username.value;
		var user=user.trim();
		var pass=document.login.password.value;
		var res = true;
		if(user == '')
		{
			document.getElementById('error').innerHTML="Please Enter Username";
			res = false;
			return false;
		}
		if(pass == '')
		{
			res = false;
			document.getElementById('error').innerHTML="Please Enter Password";
			return false;
		}
		
		// your function if, validate is success
		if(res){
		
		
		// AJAX Code To Submit Form.
		var dataString = 'user='+ user + '&pass='+ pass + '&login=yes';
		
		$.ajax({
			type: "POST",
			url: "index.php",
			data: dataString,
			cache: false,
			success: function(result){
			var result = (result.trim());
			console.log(result);
			if(result == '123'){
				window.location = "dashboard.php";
			}else{
				document.getElementById('error').innerHTML="Invalid Login. pls tryagain";
			}

			}
		});
		}else{
			document.getElementById('error').innerHTML="error";
		}
				

	}
	</script>
	<link href='http://fonts.googleapis.com/css?family=Ubuntu:500' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/login.css">
  </head>
	<body>
	
	<form name="login" id="login">
	<div class="login">
	  <div class="login-header">
		<h1>IBT <small>assignment</small></h1>
	  </div>
	  <div class="login-form">
		<h3>Username:</h3>
		<input type="text" name="username" placeholder="Username"/><br>
		<h3>Password:</h3>
		<input type="password" name="password" placeholder="Password"/>
		<br>
		<input type="button"   onclick="valid()" value="Login" class="login-button"/>
		<br>
		<br>
	  </div>
	  <div id="error"></div>
	</div>
	</form>
    
  </body>
</html>
