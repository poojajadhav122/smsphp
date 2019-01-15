<?php
require_once 'connection.php';

//print_r($_POST);
if(empty($_POST['grname'])){
	echo "please enter group name";
}
else{
	$rec = $_POST['grname'];
	$uid = $_SESSION['uid'];
	//echo $uid;

	$str ="select count(*) as cnt from usergroup where grname='$rec' and gruid='$uid'";
	//echo $str;
	$response = $conn->query($str) or die($conn->error);
	//print_r($response);

	$result = $response->fetch_object();
	// print_r($result);
	// exit;
	if($result->cnt > 0){
		echo "group exit";
	}
    else{
    	$str = "insert into usergroup (grname,gruid) values('$rec','$uid')";

    	//echo $str;
    	$ans = $conn->query($str) or die($conn->error);
    	if($ans){
    		echo "group added";
    	}
    }

}

require_once 'disconnect.php';


?>