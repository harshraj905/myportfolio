<?php 

$hostname = 'localhost';
$username = 'root';
$password = 'Admin1234#@';
$dbname = 'portfolio';


$config = mysqli_connect($hostname,$username,$password,$dbname);

// if($config)
// {
//     echo "Database Connection Successful";
// }
// else{
//     echo "Database Failed with Error:".mysqli_connect_error();
// }
 
?>