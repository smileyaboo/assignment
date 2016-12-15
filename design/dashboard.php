<?php include('topheader.php'); ?>

<!-- Content Wrapper. Contains page content -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript">
function deletecontent(val)
{
	var dataString = 'dltuid='+val;
	$.ajax({
		type: "POST",
		url:  "dashboard.php?deletecontent=yes",
		data: dataString,
		success: function(html){
			window.location.href = 'dashboard.php';
		}
	});
}
function edit(val)
{
	window.location.href = 'create.php?type=edit&c_id='+val;
}
</script>
<link rel="stylesheet" type="text/css" href="css/dashboard.css">
<style>
.button {
    background-color: #0b500e;
	float:right;
    border: none;
    color: white;
    padding: 10px 15px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
</style>
<a href="index.php" class="button">Logout</a>
<a href="create.php" class="button">Add content</a>

<table>
	<thead>
	<tr>
		<th>No</th>
		<th>Title</th>
		<th>Content</th>
		<th>Created</th>
		<th>Updated</th>
		<th>Created by</th>
		<th>Action</th>
	</tr>
	</thead>
	<tbody>

<?php $i = 1; foreach($contentlist as $key=>$val){ 	?>
    <tr>
		<td><?php echo $i; ?></td>
		<td><?php echo $val['title']; ?></td>
		<td><?php echo $val['content']; ?></td>
		<td><?php echo $val['created']; ?></td>
		<td><?php echo $val['updated']; ?></td>
		<td><?php echo $val['name']; ?></td>
		<td><a onclick="edit(<?php echo $val['c_id']; ?>)">Edit</a> || <a onclick="deletecontent(<?php echo $val['c_id']; ?>)">Delete</a>  </td>
	</tr>
<?php $i++; } ?> 
	</tbody>
</table>
<?php require('footer.php'); ?>