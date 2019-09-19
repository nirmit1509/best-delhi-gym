<?php
     $con = mysqli_connect("127.0.0.1", "root", "");
	if(!$con){
		echo "Not Connected to server";
	}
	if(!mysqli_select_db($con,"delhi best gym")){
		echo "DataBase not connected";
	}
	global $UName, $Email, $Phone, $insert ;
	$flag = false;
	
	if(isset($_POST['name'])) {
		$UName = $_POST["name"];
	}
	if(isset($_POST['email'])) {
		$Email = $_POST["email"];
	}
	if(isset($_POST['phone'])) {
		$Phone = $_POST["phone"];
	}
	
	$select_Email = "SELECT Email FROM vip_form WHERE Email like '$Email' ";
	$result_Email = mysqli_query($con, $select_Email);
	if (mysqli_num_rows($result_Email) > 0) {
		?><script>window.alert("OOPS!!! Email already registered.")</script><?php
	}
	$select_Phone = "SELECT Phone FROM vip_form WHERE Phone like '$Phone' ";
	$result_Phone = mysqli_query($con, $select_Phone);
	if (mysqli_num_rows($result_Phone) > 0) {
		?><script>window.alert("OOPS!!! Phone no. already registered.")</script><?php
	}
	else{	
	$insert = "Insert into vip_form (Name, Email, Phone) values ('$UName', '$Email', '$Phone')";
	if(!mysqli_query($con, $insert)){
		echo "Not inserted";
	}
	?><script>window.alert("Inserted succesfully")</script><?php
	}
	
	header("refresh:0.1; url=contact-us.php");
?>




















