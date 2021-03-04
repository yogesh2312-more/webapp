<?php


$conn = mysqli_connect("localhost","root","emp","test");

// Check connection
if (mysqli_connect_errno()) {
  echo "Faile: " . mysqli_connect_error();
  exit();
}


if(isset($_POST['submit']))	
{
	$cust_name=$_POST['cust_name'];
	$mobile=$_POST['mobile'];
	
	mysqli_query($conn,"INSERT into user_details(cust_name,mobile) values('".$cust_name."','".$mobile."')");
	
	echo "<script>alert('Record Submitted')</script>";
	
}		




?>


<form action="#" method="POST">
  <label for="fname">Customer Name:</label><br>
  <input type="text" id="cust_name" name="cust_name" ><br>
  <label for="lname">Mobile:</label><br>
  <input type="text" id="mobile" name="mobile"><br><br>
  <input type="submit" name="submit" value="Submit">
</form>
