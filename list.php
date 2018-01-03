<?php require('db.php');?>
<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<script src="jquery/jquery.min.js"></script>
	</head>
	<body>
		<div class="jumbotron text-center">
			<h1>PHP-MongoDB CRUD Operation</h1>			
		</div>
		<div class="container-fluid">
			<h1>List</h1>
			<h2 style="text-align:right"><a href="add.php">Add</a></h2>			
		</div>
		
		<table class="table">
		<thead class="thead-dark">
			<tr>
				<th>Contact ID</th>
				<th>Contact Name</th>
				<th>Contact Email</th>
				<th>Contact Message</th>
				<th>Action</th>
			</tr>
		</thead>
		<?php
		
			$collection = $client->firstproject->contact;
			$result = $collection->find();
		?>
		<tbody>
		<?php foreach ($result as $entry) { ?>
			<tr>
				<td><?php echo $entry['_id'];?></td>
				<td><?php echo $entry['contactname'];?></td>
				<td><?php echo $entry['contactemail'];?></td>
				<td><?php echo $entry['contactmessage'];?></td>
				<td><a href="edit.php?id=<?php echo $entry['_id'];?>">Edit</a> | <a onClick ='return confirm("Do you want to remove this record?");'href="delete.php?id=<?php echo $entry['_id'];?>">Delete</a></td>
			</tr>	
		<?php }?>
		</tbody>
		</table>
	</body>
</html>