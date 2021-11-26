<?php
 $host = "localhost";
 $user = "root";
 $pass = "";
 $db = "tugas";
 $conn = new mysqli($host,$user,$pass,$db);
 if($conn){
	  echo "BERHASIL";
	  echo "<br/>";
 }else{
	  echo "GAGAL";
 }
?>
<?php
function registrasi($data){
   global $conn;
   $username = strtolower(stripslashes($data["username"]));
   $password = mysqli_real_escape_string($conn,$data["password"]);
   $password2 = mysqli_real_escape_string($conn,$data["password2"]);

   $result = mysqli_query($conn, "SELECT username FROM akun WHERE username='$username'");
   if(mysqli_fetch_assoc($result)) {
		  echo "<script>
		          alert('Username sudah terdaftar!')
		        </script>";
				return false;
   }
   if ($password !== $password2){
    echo"<script>
	       alert('konfirmasi password tidak sesuai');
	      </script>";
    return false;
   }
   // enkripsi password
   $password = password_hash($password, PASSWORD_DEFAULT);
   
   mysqli_query($conn, "INSERT INTO akun VALUES('','$username','$password')");
   return mysqli_affected_rows($conn);
}
?>