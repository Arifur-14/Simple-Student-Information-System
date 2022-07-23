<?php
$connect = mysqli_connect("localhost", "root", "", "student_database");
if(isset($_POST["id"]))
{
 $query = "DELETE FROM student WHERE id = '".$_POST["id"]."'";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Deleted';
 }
}
?>
