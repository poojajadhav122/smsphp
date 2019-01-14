<?php  
	require_once 'connection.php';
	// print_r($_POST);
	if( preg_match("/^[a-zA-Z][a-zA-Z ]+[a-zA-Z]$/", $_POST['username']) == 0){
		echo "invalid Name";
	}
	else if( preg_match("/^[1-9][0-9]{9}$/", $_POST['usermobile']) == 0){
		echo "invalid mobile";
	}
	else if( preg_match("/^([a-zA-Z0-9][a-zA-Z0-9_\.]+[a-zA-Z0-9])@([a-zA-Z0-9][a-zA-Z0-9\-]+[a-zA-Z0-9])\.([a-zA-Z]{2,})(\.[a-zA-Z]{2,})?$/", $_POST['useremail']) == 0){
		echo "invalid Email";
	}
	else if( preg_match("/^[a-zA-Z0-9]{4,12}$/", $_POST['userpass']) == 0){
		echo "invalid Password";
	}
	else if( $_POST['userpass'] != $_POST['usercpass']){
		echo "invalid Confirm Password";
	}
	else{
		$name = $_POST['username'];
		$email = $_POST['useremail'];
		$mobile = $_POST['usermobile'];
		$pass = sha1($_POST['userpass']);
		
		$str = "insert into login (username,useremail,usermobile,userpass) values ('$name','$email','$mobile','$pass')";
		$conn->query($str) or die($conn->error);
		echo "User added";
	}
	require_once 'disconnect.php';
?>