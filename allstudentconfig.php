<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "student_database");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM student 
  WHERE Studentname LIKE '%".$search."%'
  OR Mothername LIKE '%".$search."%' 
  OR Studentid LIKE '%".$search."%' 
  OR Fathername LIKE '%".$search."%' 
  OR Contact LIKE '%".$search."%'
 ";
}
else
{
 $query = "
  SELECT * FROM student ORDER BY Studentid
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
 <div class="table-responsive">
 <table class="table table-bordered table-light">
    <tr>
     <th>Student Name</th>
     <th>Father Name</th>
     <th>Mother Name</th>
     <th>Birthdate</th>
     <th>Gender</th>
     <th>Student Id</th>
     <th>Department</th>
     <th>Batch</th>
     <th>Semester</th>
     <th>Religion</th>
     <th>Contact</th>
     <th>Email</th>
     <th>Address</th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
   <td>'. $row['studentname'].'</td>
   <td>'. $row['fathername'].'</td>
   <td>'. $row['mothername'].'</td>
   <td>'. $row['birthdate'].'</td>
   <td>'. $row['gender'].'</td>
   <td>'. $row['studentid'].'</td>
   <td>'. $row['department'].'</td>
   <td>'. $row['batch'].'</td>
   <td>'. $row['semester'].'</td>
   <td>'. $row['religion'].'</td>
   <td>'. $row['contact'].'</td>
   <td>'. $row['email'].'</td>
   <td>'. $row['address'].'</td>

   </tr>
  ';
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}


?>