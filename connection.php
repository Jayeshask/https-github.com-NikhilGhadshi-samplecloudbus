<?php  
     	define('DB_SERVER', 'remotemysql.com');
	define('DB_USERNAME', 'qZjjb8jolX');
	define('DB_PASSWORD', 'AsA4XcEGr2');
	define('DB_NAME', 'qZjjb8jolX');

       	$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD,DB_NAME);

if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

?>
