<?php
require 'koneksi.php';
if(isset($_POST["registrasi"])){
	if(registrasi($_POST) > 0){
		echo "<script>
		       alert('user baru berhasil ditambah!');
		      </script>";
	    header("Location: product.html");
		   exit;
	} else{
		echo mysqli_error($conn);
	}
}
?>
<!DOCTYPE html>
<html>
<head>
 <title>Registrasi</title>
 <style>
  label{
		display:block;
  }
 </style>
 <link rel="stylesheet" href="stylee.css">
</head>
<body>
<div class="registrasi">
<h1 style="text-align:center">Halaman Registrasi</h1>
<form action="" method="post">
 <ul>
  <li>
   <label for="username">Username:</label>
   <input type="text" name="username" id="username">
  </li>
  <li>
   <label for="password">Password:</label>
   <input type="password" name="password" id="password"</label>
  </li>
  <li>
   <label for="password2">Konfirmasi Password</label>
   <input type="password" name="password2" id="password2">
  </li>
  <li>
   <button type="submit" name="registrasi" class="btn-registrasi">REGISTRASI!</button>
  </li> 
 </ul>
</form>
</div>
</body>
</html>