<?php 
session_start();
require_once('conn.php');

$username = $_POST['username'];
$password = $_POST['password'];

if ($username=='admin' && $password=='admin'){
		$_SESSION['SESS_USERID'] ='admin';
		$_SESSION['SESS_NAME'] ='admin';
		header('Location: user.php');
		exit();
	};

  
    $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
    $results= mysql_query($sql);

    if ($results){
    	if(mysql_num_rows($results) > 0){
    		session_regenerate_id();
    		$one = mysql_fetch_assoc($results);
    		$_SESSION['SESS_USERID'] = $one['id'];
    		$_SESSION['SESS_NAME'] = $one['username'];
    		session_write_close();
    		header("Location: userpro.php");
    		exit();
    	}else {
    		header("Location: index.php");
    		exit();
    	}
    }else{
    	die("Query Failed");
    }
   

?>
