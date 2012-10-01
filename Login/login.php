<?php

session_start();

require "../Common/db.php";

include "../Common/functions.php";

//protect the posted value then store them to variables
$username = protect($_POST['email']);
$password = protect($_POST['password']);

//Check if the username or password boxes were not filled in
if(!$username || !$password){
	//if not display an error message
	echo "<center>You need to fill in a <b>Username</b> and a <b>Password</b>!</center>";
}else{
	//if they were continue checking

	//select all rows from the table where the username matches the one entered by the user
	$res = mysql_query("SELECT * FROM `users` WHERE `username` = '".$username."'");
	$num = mysql_num_rows($res);

	//check if there was not a match
	if($num == 0){
		//if not display an error message
		echo "<center>The <b>Username</b> you supplied does not exist!</center>";
	}else{
		
		//if there was a match continue checking

		//select all rows where the username and password match the ones submitted by the user
		$res = mysql_query("SELECT * FROM `users` WHERE `username` = '".$username."' AND `password` = '".$password."'");
		
		$num = mysql_num_rows($res);
		
		//echo $num;

		//check if there was not a match
		//if($num == 0){
			//if not display error message
			//echo "<center>The <b>Password</b> you supplied does not match the one for that username!</center>";
		//}else{
		
		//	echo "<center>Logged in</center>";
		//}	
			//echo $num;
			
			
			//header('Location: loggedin/usersonline.php');
			//if there was continue checking

			//split all fields fom the correct row into an associative array
			$row = mysql_fetch_assoc($res);
			
			$_SESSION['uid'] = $row['ID'];
			
			//echo $row['ID'];
			
			header('Location: ../page.php?page=User/home');

			//check to see if the user has not activated their account yet
			//if($row['active'] != 1){
				//if not display error message
				//echo "<center>You have not yet <b>Activated</b> your account!</center>";
			//}else{
				//if they have log them in

				//set the login session storing there id - we use this to see if they are logged in or not
				//$_SESSION['uid'] = $row['id'];
				//show message
				//echo "<center>You have successfully logged in!</center>";

				//update the online field to 50 seconds into the future
				//$time = date('U')+50;
				//mysql_query("UPDATE `users` SET `online` = '".$time."' WHERE `id` = '".$_SESSION['uid']."'");

				//redirect them to the usersonline page
				//header('Location: usersOnline.php');
			//}
		//}
	}
}
	
?>