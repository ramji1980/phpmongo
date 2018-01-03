<?php
require_once("db.php");

 $id   = $_GET['id'];
//exit;
$collection=$client->firstproject->contact;
$deleteresult=$collection->deleteOne(['_id'=>'$id']);
header("location:list.php");
?>