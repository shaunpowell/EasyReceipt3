<?php

	session_start();
	
	$uid = '';
	if (isset($_SESSION['uid'])) {
		$uid = $_SESSION['uid'];
	}

	require"Common/header.php"

?>

<?php 
	//require('Common/branding.php');
	require('Common/navBar.php');
          
	//require('Login/checkLogIn.php');
				
?>


<?php
	$whitelist = array("home", "User/userPage");
  	if(in_array($_GET['page'], $whitelist)) {
				
		include($_GET['page'].".php");
    			
  	}?>
  			
<?php require"Common/footer.php"?>
				
				
		
		
	