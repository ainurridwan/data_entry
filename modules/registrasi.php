<?php 
function registrasi($data) {
    include_once "db_connection.php";
    global  $con;

    // stripslashes berfungsi untuk menghilangkan backslash
    // strtolower memaksa string huruf kecil
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($con, $data["password"]);
    $password2 = mysqli_real_escape_string($con, $data["password2"]);


    // cek username sudah ada atau belum
    $result = mysqli_query($con, "SELECT username FROM table_user WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
        alert('konfirmasi : username telah terdaftar');
        window.location.href = 'http://localhost/data_entry/pages/form/registrasi.php';
        </script>";

        return false;
    }

    // cek konfirmasi password
    if ( $password !== $password2) {
        echo "<script>
            alert('konfirmasi : password tidak sesuai');
            window.location.href = 'http://localhost/data_entry/pages/form/login.php';
            </script>";
        
        return false;
    } 

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambahkan userbaru ke database
    mysqli_query($con, "INSERT INTO table_user(username, password) VALUES ('$username','$password')");

    return mysqli_affected_rows($con);
}