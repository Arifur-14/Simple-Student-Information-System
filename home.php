<?php 
include('functions.php');
if (!isAdmin()) {
	$_SESSION['msg'] = "You must log in first";
	header('location:login.php');
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location:homepage/home.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet"  href="style.css" type="text/css">
	<link rel="stylesheet"  href="table.css" type="text/css">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
  <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
	<style>
	th {
		text-align: center;
		background: #2cadca;
    	color: rgb(240 238 238);
	}
	
	</style>
</head>
<body>

	<div class="header2">
		<h2>Admin - Home Page</h2>
	</div>
	<div class="content">
		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- logged in user information -->
		<div class="profile_info">
			<img src="images/user_profile.png"  >

			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
						<button type="submit" class="btn" name="logout" > <a href="home.php?logout='1'" style="color: white;text-decoration:none;">logout</a></button>
                       &nbsp;<button type="submit" class="btn" name="register_btn"> <a href="addstudent.php" style="color:white; text-decoration:none;"> + Add Student</a></button>
					</small>

				<?php endif ?>
			</div>
		</div>
		<div class="form-inline">
        	<label for="search" class="font-weight-bold lead text-dark"> Search Record </label>&nbsp;&nbsp;&nbsp;&nbsp;
        	<input type="text" name="search_text" id="search_text"  class="form-control from-control-lg rounded-0 border-primary" placeholder="Search...."/>
      	</div>
       <br />
      <div id="result"></div>   	
<script type="text/javascript" language="javascript" >
 $(document).ready(function(){
  
	load_data();

 function load_data(query)
 {
  $.ajax({
   url:"fetch.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#result').html(data);
   }
  });
 }
 $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});
</script>
	</body>
</html>