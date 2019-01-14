<?php  
	if(session_id() == ""){
		session_start();
	}
	$conn = new mysqli("localhost","root","","poojasms");
?>