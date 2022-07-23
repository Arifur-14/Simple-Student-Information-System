
<!DOCTYPE html>
<html>
    <head>
        <title>Show All student Database</title> 
        <link rel="stylesheet"  href="style.css" type="text/css">
	    <link rel="stylesheet"  href="table.css" type="text/css"> 
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
  <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
    </head>
    <body>
        <div class="header2">
            <h2> All Student Information</h2>
        </div>
        <div class="content">
            <button type="submit" class="btn" ><a href="http://localhost/information-system/homepage/home.php"style="text-decoration:none; color:white;">&laquo;Back to Home</a></button>
        <div>
        <br />
        <div class="form-inline">
            <label for="search" class="font-weight-bold lead text-dark"> Search Record </label>&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name="search_text" id="search_text"  class="form-control from-control-lg rounded-0 border-primary" placeholder="Search...."/>
        </div>
       <br />
      <div id="result"></div>
    </body>
</html>
<script>
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"allstudentconfig.php",
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