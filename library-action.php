<?php
require_once 'connection.php';

//print_r($_POST);
if(empty($_POST['libname'])){
	echo "please enter library name";
}
else{
	$rec = $_POST['libname'];
	$uid = $_SESSION['uid'];
	//echo $uid;

	$str ="select count(*) as cnt from library where libname='$rec' and libuid='$uid'";
	//echo $str;
	$response = $conn->query($str) or die($conn->error);
	//print_r($response);

	$result = $response->fetch_object();
	// print_r($result);
	// exit;
	if($result->cnt > 0){
		echo "library exit";
	}
    else{
    	$str = "insert into library (libname,libuid) values('$rec','$uid')";

    	//echo $str;
    	$ans = $conn->query($str) or die($conn->error);
    	if($ans){
    		echo "library added";
    	}
    }

}

require_once 'disconnect.php';


?>