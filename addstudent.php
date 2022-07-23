<?php  include('functions.php');
if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		$record = mysqli_query($db, "SELECT * FROM student WHERE id=$id");
		{
			$n = mysqli_fetch_array($record);
			$studentname = $n['studentname'];
			$fathername = $n['fathername'];
			$mothername = $n['mothername'];
			$birhtdate = $n['birthdate'];
			$gender=	$n['gender'];
			$studentid = $n['studentid'];
			$department = $n['department'];
			$batch = $n['batch'];
			$semester = $n['semester'];
			$religion = $n['religion'];
			$email = $n['email'];
			$contact = $n['contact'];
			$address = $n['address'];
		}
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Add Student Information</title>
		<link rel="stylesheet" href="style.css" type="text/css">
	</head>
	<body>
	<?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
	<?php endif ?>
	<div class="header">
		<h2>Student Information Form</h2>
	</div>
	
	<form method="post" action="functions.php">
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<div class="input-group">
			<label>Student Name</label>
			<input type="text" name="studentname" placeholder="Enter student name" value="<?php echo $studentname; ?>">
		</div>
		<div class="input-group">
			<label>Father Name</label>
			<input type="text" name="fathername" Placeholder="Enter father name" value="<?php echo $fathername; ?>">
		</div>
		<div class="input-group">
			<label>Mother Name</label>
			<input type="text" name="mothername" Placeholder="Enter mother name"  value="<?php echo $mothername; ?>" >
		</div>
		<div class="input-group">
			<label>Date of Birth</label>
			<input type="date" name="birthdate" >
		</div>
		<div class="input-group">
			<label>Gender</label>
			<select name="gender" id="semst_type">
				<option value="#">Select anyone---</option>
				<option value="Male">Male</option>
				<option value="Female">Female</option>
			</select>
		</div>
		<div class="input-group">
			<label>Student ID</label>
			<input type="text" name="studentid" Placeholder="Enter student id" value="<?php echo $studentid; ?>" >
		</div>
		<div class="input-group">
			<label>Department</label>
			<select name="department" id="dept_type" >
			<option value="selected">Select anyone---</option>
			<option value="CSE">CSE</option>
			<option value="EEE">EEE</option>
			<option value="CE">CE</option>
			<option value="MATHE">MATHEMATICS</option>
			<option value="BBA">BBA</option>
			<option value="LLB">LLB</option>
			</select>
		</div>
		
		<div class="input-group">
			<label>Batch</label>
			<input type="text" name="batch" Placeholder="Enter batch" value="<?php echo $batch; ?>">
		</div>

		<div class="input-group">
			<label>Semester</label>
			<select name="semester" id="semst_type" >
			<option value="#">Select anyone</option>
			<option value="1st">1st</option>
			<option value="2nd">2nd</option>
			<option value="3rd">3rd</option>
			<option value="4th">4th</option>
			<option value="5th">5th</option>
			<option value="6th">6th</option>
			<option value="7th">7th</option>
			<option value="8th">8th</option>
			</select>
		</div>
		
		<div class="input-group">
			<label>Religion</label>
			<input type="text" name="religion" Placeholder="Enter religion" value="<?php echo $religion; ?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="text" name="email" Placeholder="enter@gmail.com"  value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>Contact No</label>
			<input type="text" name="contact" Placeholder="Enter contact no" value="<?php echo $contact; ?>" >
		</div>
		<div class="input-group">
			<label>Address</label>
			<input type="text" name="address" Placeholder="Enter address" value="<?php echo $address; ?>" >
		</div>
		<div class="input-group">
			<?php if ($update == true): ?>
			<button class="btn" type="submit" name="update" style="background:#607817;" >update</button>
			<?php else: ?>
			<button class="btn" type="submit" name="save" >Save</button>
			<?php endif ?>
		</div>
			
	</form>	
	</body>		
</html>
