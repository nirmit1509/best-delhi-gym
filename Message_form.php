<?php
     $con = mysqli_connect("127.0.0.1", "root", "");
	if(!$con){
		echo "Not Connected to server";
	}
	if(!mysqli_select_db($con,"delhi best gym")){
		echo "DataBase not connected";
	}
	global $UName, $Email, $Phone, $Message, $insert ;
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
	if(isset($_POST['message'])) {
		$Message = $_POST["message"];
	}
	
	$insert = "Insert into message_form (Name, Email, Phone, Message) values ('$UName', '$Email', '$Phone', '$Message')";
	if(!mysqli_query($con, $insert)){
		?><script>window.alert("There was an error recording the message...")</script><?php
	}
?><script>window.alert("Message Recorded Succesfully !!!")</script><?php
	
	header("refresh:0.1; url=contact-us.php");
?>