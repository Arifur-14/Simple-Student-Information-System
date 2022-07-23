<?php
$connect = mysqli_connect("localhost", "root", "", "student_database");
if(isset($_POST["Studentname"], $_POST["Birthdate"]))
{
 $first_name = mysqli_real_escape_string($connect, $_POST["Studentname"]);
 $last_name = mysqli_real_escape_string($connect, $_POST["Birthdate"]);
 $query = "INSERT INTO student (Studentname, Birthdate) VALUES('$Studentname', '$Birhtdate')";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Inserted';
 }
}
?>
