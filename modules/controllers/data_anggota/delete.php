<?php

include_once '../../db_connection.php';

    // var_dump($con); die;
    // var_dump($_GET['id']);die;
    $id = $_GET['id'];
    $result = mysqli_query($con, "DELETE FROM table_anggota where idno=$id");
    echo "
            <script>
                window.location.href = 'http://localhost/data_entry/pages/content/data_anggota.php';
            </script>
            ";


?>