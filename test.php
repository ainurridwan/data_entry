<?php 

include_once "modules/db_connection.php";
// Mengambil id dari url



// fetch user data based on id
$result = mysqli_query($con, "SELECT * FROM 'table_anggota' WHERE idno=101");



?>