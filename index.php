<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datepicker/0.6.5/datepicker.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/datepicker/0.6.5/datepicker.js"></script> -->
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

 <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


<div class="container">
<br><br>
<form accept="" method="POST" >
<input type="text" name="birthdate" id="datepicker" autocomplete="off">
<input type="submit" name="submit" value="submit">
</form>
</div>
<!-- <script>
$('#datepicker').datepicker({
	changeMonth: true,
    changeYear: true


});
</script> -->
<script>
	var d = new Date();
	$(function() {
		$( "#datepicker" ).datepicker({
	                defaultDate:d, //set the default date to Jan 1st 1990
					changeMonth: true,
					changeYear: true,
	                yearRange: '1800:2050', //set the range of years
	                dateFormat: 'dd-mm-yy' //set the format of the date
		});
	});
</script>

<?php
$host="localhost";
$user="root";
$pass="";
$db="datepicker";
$conn=mysqli_connect($host,$user,$pass,$db);
if($conn!=true){
	die('failed');
}
else{
	//echo"connect";
}



if(isset($_POST['submit'])){
	//$birthdate=$_POST['birthdate'];
	 $birthdate = date('Y-m-d', strtotime($_POST['birthdate']));
	//echo $birthdate;


	//echo $insert="INSERT INTO datepicker_dob(birthdate) VALUES('$birthdate')";
	$res=mysqli_query($conn,$insert);
	if($res!=true){
		die('failed to insert');
	}
	else{
		echo"Inserted ";
	}


}

?>
