<?php
	include ('dbconn.php');
	
	$newuser = $_POST['usernameinput'];
	$newpwd = $_POST['passwordinput'];
	
	$insert = mysqli_query($con, "INSERT INTO users (`user_name`, `password`) VALUES ('".$newuser."', '".$newpwd."');");

	if ($insert){
		header("Location: /forum-tutorial/reg-success");
	}

	else{
		echo("This should not be found: " .$newuser ." This is the username, " .$insert . "Is the status");
	
	}
mysqli_close($con);
?>