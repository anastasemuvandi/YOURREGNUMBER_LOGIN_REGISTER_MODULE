<?php
$servername = "yourregnumber-mysql";
$username = "root";
$password = "";
$dbname = "yourregnumber_shareride_db";
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$pass=$_POST['password'];
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO tbl_users (user_fname, user_lname,user_gender,user_email, user_password)
VALUES ('$fname','$lname', '$gender','$email','$pass')";

if ($conn->query($sql) === TRUE) {
  header("Location:login.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>