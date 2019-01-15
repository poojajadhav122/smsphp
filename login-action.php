<?php  
	require_once 'connection.php';
	
	if( preg_match("/^([a-zA-Z0-9][a-zA-Z0-9_\.]+[a-zA-Z0-9])@([a-zA-Z0-9][a-zA-Z0-9\-]+[a-zA-Z0-9])\.([a-zA-Z]{2,})(\.[a-zA-Z]{2,})?$/", $_POST['useremail']) == 0){
		echo "invalid Email";
	}
	else if( preg_match("/^[a-zA-Z0-9]{4,12}$/", $_POST['userpass']) == 0){
		echo "invalid Password";
	}
	else{
		 $email = $_POST['useremail'];
		 $pass = sha1($_POST['userpass']);

		 $str = "select id,username,usermobile,userpass from login where useremail='$email'";
		 //echo $str;
		 $res = $conn->query($str) or die($conn->error);
		// print_r($res);//this will count how many user are avalibale in the login table see in the database
        
          if($res->num_rows > 0){ //first check this if with elese "email not exit"
          	//echo "ok";
          	$ans = $res->fetch_object();
          	//print_r($ans);
          	$dbpass = $ans->userpass;

          	if($dbpass  != $pass){  //then go this if to chck with else ="sucess"
          		echo "password Missmatch";
          	}
          	else{
          		//echo session_id(); // this we did because after login we have to store our data means name,id.mobile and email in our session which we genartae in inde.php and we have check that our values came in the session or not then go xamp folder in that temp folder in that all this values
          		$_SESSION['name'] = $ans->username;
          		$_SESSION['mobile'] = $ans->usermobile;
          		$_SESSION['uid'] = $ans->id; //this all value we given in the database
          		$_SESSION['email'] = $email;//this email we taken fromtext in the above we given this $email in this page
          		$_SESSION['sms'] = true;// and this sms we have given in index.php to set session that time  we gien name as a sms and its should give true only
          		echo "success";
          	}
          }
          else{
                  echo "email dose not exit";
          }
		
	}
	require_once 'disconnect.php';
?>