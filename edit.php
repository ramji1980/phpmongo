<?php 
require_once('db.php');
$rid   = $_GET['id'];
	$collection = $client->firstproject->contact;
	$result = $collection->findOne(['_id'=>'59f07da952a90012605baec7']);
	//var_dump($result);
	foreach ($result as $entry) { 
		echo $entry['_id'];
		echo $entry['contactname'];
		echo $entry['contactemail'];
		echo $entry['contactmessage'];
	}
?>
<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="jquery/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	</head>
<body>
		<div class="jumbotron text-center">
			<h1>PHP-MongoDB CRUD Operation</h1>			
		</div>
		<div class="container-fluid">
			<h1>Edit</h1>					
		</div>

<div class="container"> 
  <form name="frmname" method="post" action="save.php">
    <div class="form-group">
      <label for="name">Contact Name:</label>
      <input type="text" class="form-control" id="name" name="contactname" placeholder="Enter Name">
    </div>
    <div class="form-group">
      <label for="email">Contact Email:</label>
      <input type="email" class="form-control" id="cotactemail" name="contactemail" placeholder="Enter Email">
    </div>
    <div class="form-group">
      <label for="message">
        Contact Message:
      </label>
	  <textarea class="form-control" id="message" name="contactmessage" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
