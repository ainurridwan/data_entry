<?php 

$password = password_hash($plaintextPass, PASSWORD_DEFAULT);
$password2 = password_hash($plaintextPass, PASSWORD_DEFAULT);

echo $password . "\n" . $password2;


?>