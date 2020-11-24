<?php
include('dbConnect.php');
if(isset($_POST["first_name"], $_POST["last_name"],$_POST["email"], $_POST["dateCreated"]))
{
 $first_name = mysqli_real_escape_string($connect, $_POST["first_name"]);
 $last_name = mysqli_real_escape_string($connect, $_POST["last_name"]);
 $email = mysqli_real_escape_string($connect, $_POST["email"]);
 $dateCreated = mysqli_real_escape_string($connect, $_POST["dateCreated"]);
 $query = "INSERT INTO users (first_name, last_name, email, dateCreated) VALUES('$first_name', '$last_name', '$email', NOW())";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Inserted';
 }
}

?>