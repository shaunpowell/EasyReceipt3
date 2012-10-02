<?php
	if(strcmp($uid, "") == 0){
	
		if(strcmp($_GET['page'], "home") == 0) {
			
			require('LogIn/loginframe.php');
	
		} else {
		
			header('Location: page.php?page=home');
		
		}
			
	} else {

		if(strcmp($_GET['page'], "home") == 0){
			
			header('Location: page.php?page=User/userPage');
		} else {
			

	?>
		<div id="logout">
        	<a href="User/logout.php">Logout</a>
        </div>
        <?php 							
				
		} 

	}
?> 