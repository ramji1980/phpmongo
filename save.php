<?php
require_once("db.php");

$cname=$_POST['contactname'];
$cemail=$_POST['contactemail'];
$cmessage=$_POST['contactmessage'];

$collection=$client->firstproject->contact;
$result=$collection->insertOne(['contactname' =>$cname, 'contactemail'=>$cemail, 'contactmessage'=>$cmessage]);
header("location:list.php");
?>