<?php include('topheader.php'); ?>
<script type="text/javascript">
 function addcontent(type){
	 alert(type);
		var title	=	document.getElementById("title").value;
		var content	=	document.getElementById("content").value;
	
		var result = true;
		
		if(title == ""){
			document.getElementById('error').innerHTML="Please Fill Title";
			result = false;
		}
		else{
			document.getElementById('error').innerHTML="";
		}
		if(content == ""){
			document.getElementById('error').innerHTML="Please Fill the Content";
			result = false;
		}
		else{
			document.getElementById('error').innerHTML="";
		}
		
		if(result == true){
			if(type != 'Add'){
					$.ajax({
					type: "POST",
					url: "create.php?update=yes&id="+type,
					data: new FormData($('#hongkiat-form')[0]),
					processData: false,
					contentType: false,
					success: function(html){
						console.log(html);
						var val = html.replace(/\s/g, '');
						console.log(val);
						if(val == 'yes')
						{
							console.log('Success');
							window.location.href = 'dashboard.php';
						}else{
							//document.getElementById('loginerr').innerHTML = 'Sorry..! Invalid Login. Try again.';
						}
					}
				});
			}else{
					$.ajax({
					type: "POST",
					url: "create.php?create=yes",
					data: new FormData($('#hongkiat-form')[0]),
					processData: false,
					contentType: false,
					success: function(html){
						console.log(html);
						var val = html.replace(/\s/g, '');
						console.log(val);
						if(val == 'yes')
						{
							console.log('Success');
							window.location.href = 'dashboard.php';
						}else{
							//document.getElementById('loginerr').innerHTML = 'Sorry..! Invalid Login. Try again.';
						}
					}
				});
			}
			
		}else{
		return result;
		}		 
	 
 }
</script>
<!-- Content Wrapper. Contains page content -->
  <link rel="stylesheet" type="text/css" media="all" href="css/style.css">
  
  <link rel="stylesheet" type="text/css" media="all" href="css/responsive.css">
  
  <section id="container">
		
		<h2><?php echo ($type=='edit') ? "Edit" : "Add" ; ?> Content</h2>
		<form name="hongkiat-form" id="hongkiat-form" method="post">
		<div id="wrapping" class="clearfix">
			<section id="aligned">
			<input type="text" name="title" id="title" placeholder="Your Title" autocomplete="off" tabindex="1" class="txtinput" value="<?php echo $data[0]['title']; ?>">
		
			<textarea name="content" id="content" placeholder="Enter a content message..." tabindex="5" class="txtblock"><?php echo $data[0]['content']; ?></textarea>
			</section>
		</div>


		<section id="buttons">
			<input type="reset" name="reset" id="resetbtn" class="resetbtn" value="Reset">
			<input type="button" name="button" id="submitbtn" class="submitbtn"  onclick="addcontent('<?php echo ($type=='edit') ? $data[0]['c_id'] : "Add" ?>')" tabindex="7" value="Submit this!" />
			<br style="clear:both;">
		</section>
		</form>
		<div id="error"></div>
	</section>
<?php require('footer.php'); ?>