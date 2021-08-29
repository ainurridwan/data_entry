<?php 
include '../template/header.php' ;
include '../../modules/db_connection.php';

if (isset($_POST["login"])) {
  $username = $_POST["username"];
  $password = $_POST["password"];

  $result = mysqli_query($con, "SELECT * FROM table_user WHERE username='$username'");

  // cek username
  
  /**
   * mysqli_num_rows (berfunngsi untuk menentukan apakah ada baris yang ditemukan atau tidak bila true akan dikembalikan dengan nilai 1) 
   */
  if( mysqli_num_rows($result) === 1){  
      // cek password
      $row = mysqli_fetch_assoc($result);
      // password verify kebalikan dari password hash (untuk mengecek apakah sama dengan stringnya atau tidak)
      if (password_verify($password, $row['password'])) {
        echo "<script>
          window.location.href = 'http://localhost/data_entry/pages/content/';
        </script>";
      } 
  } 
  $error = true;
} 
?>


<form class="form-login" method="post">
            <h1 class="text-center">Form Login</h1>
            <?php if ( isset($error)) : ?>
              <p class="text-danger text-bold text-center">Username / password salah</p>
            <?php endif ; ?>
            <div class="mb-3">
              <label for="username" class="form-label">Username</label>
              <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text">We'll never share your username with anyone else.</div>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" name="password" id="password">
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Remember me</label>
              
            </div>
            <button type="submit" name="login" class="btn btn-primary">Submit</button>
          </form>
    
    </div>


<?php include "../template/footer.php"; ?>