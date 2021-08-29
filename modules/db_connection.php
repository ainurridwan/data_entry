<?php
$server = 'localhost';
$user = 'root';
$password = '';
$dbName = 'db_data_entry';

$con = mysqli_connect($server, $user , $password , $dbName);
global $con;


if(mysqli_connect_errno()){
    echo "Failed to connect to MySQL" . mysqli_connect_errno();
} else {
    echo "<script>console.log('database terkoneksi');</script>";
}