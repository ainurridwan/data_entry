<?php 

session_start();
$_SESSION = [];
session_unset();
session_destroy();

echo "<script>
    window.location.href = 'http://localhost/data_entry/pages/content/login.php';
</script>";

?>

