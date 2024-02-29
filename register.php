<?php
    include "koneksi.php";

    if (isset($_POST['register'])) {
      $username=$_POST['username'];
      $password=$_POST['password'];
      $email=$_POST['email'];
      $namalengkap=$_POST['namalengkap'];
      $alamat=$_POST['alamat'];
  
      $sql=mysqli_query($conn,"insert into user values('','$username','$password','$email','$namalengkap','$alamat')");
      
      echo "<script>
      alert('akun anda berhasil terdaftar');
      location.href='login.php';
    </script>";
    }




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Nekopict </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    include "layout/header.html";
    ?>

    <main class="container mt-5">
<div class="container row justify-content-center">
  <div class="col-7">
  <h1 class= "text-center mb-3"">REGISTER</h1>
    <form class="row g-3" action="register.php" method="POST">
          <div class="form-floating my-3">
    <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
    <label for="email">email</label>
  </div>
  <div class="form-floating my-3">
    <input type="text" class="form-control" id="username" name="username" placeholder="name@example.com">
    <label for="username">username</label>
  </div>
  <div class="form-floating my-3">
    <input type="password" class="form-control" id="password" name="password" placeholder="name@example.com">
    <label for="password">password</label>
  </div>
  <div class="form-floating my-3">
    <input type="text" class="form-control" id="namalengkap" name="namalengkap" placeholder="Password">
    <label for="namalengkap">namalengkap</label>
  </div>
  <div class="form-floating my-3">
    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="name@example.com">
    <label for="alamat">alamat</label>
  </div>
  </div>
    <div class="col-12 text-center mt-3">
    <button type="submit" class="btn btn-primary" name="register">Register</button>
    </div>
</form>
  </div>
</div>

        
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <?php
    include "layout/footer.html";
    ?>
</body>
</html>