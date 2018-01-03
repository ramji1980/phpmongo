<?php
//echo phpinfo();
require('vendor/autoload.php');


//echo extension_loaded("mongodb") ? "loaded\n" : "not loaded\n";
   // connect to mongodb
   //$m = new MongoClient();
   $client = new MongoDB\Client("mongodb://localhost:27017");
	
   
?>