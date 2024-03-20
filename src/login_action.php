<?php
$servername = "yourregnumber-mysql";
$username = "root";
$password = "";
$dbname = "yourregnumber_shareride_db";
$email=$_POST['email'];
$pass=$_POST['password'];
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM tbl_users WHERE user_email='$email' AND user_password='$pass'";
if ($conn->query($sql)->num_rows >0) {
  //  echo "you are well logged in";
  header("Location:home.php");
} else {
    header("Location:registration.php");
}
$conn->close();
?>