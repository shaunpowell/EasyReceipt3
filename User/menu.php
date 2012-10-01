<div class="tabbable"> <!-- Only required for left/right tabs -->
	<ul class="nav nav-tabs">  
		<li 
    		<?php 
    			if ($current != 'home') {?> 
      				>	
    			<?php
				} else { 
      				echo ' class="active">'; 
    			} ?>
    			<a data-toggle="tab" href="/EasyReceipt2/page.php?page=User/home">Home</a>
  		</li>
  
  		<li 
    		<?php 
    			if ($current != 'upload') {?> 
    				> 
    			<?php
    			} else { 
      				echo ' class="active">'; 
    			} ?>
    			<a data-toggle="tab" href="/EasyReceipt2/page.php?page=User/upload">Upload</a>
  			</li>
  
  		<li 
    		<?php 
    			if ($current != 'sort') {?>
      				>
    			<?php
    			} else { 
      				echo ' class="active">'; 
    			} ?>
    			<a data-toggle="tab" href="/EasyReceipt2/page.php?page=User/sort">Sort</a> 
  		</li>
  
  		<li 
    		<?php 
    			if ($current != 'report') {?>
      				> 
    			<?php
    			} else { 
      				echo ' class="active">'; 
    			} ?>
    			<a data-toggle="tab" href="/EasyReceipt2/page.php?page=User/report">Report</a>
  		</li>
  
  		<li 
    		<?php 
    			if ($current != 'accountdetails') {?> 
      				>
    			<?php
    			} else { 
      				echo ' class="active"> Account Details'; 
   				} ?>
   				<a data-toggle="tab" href="/EasyReceipt2/page.php?page=User/accountDetails">Account Details</a>
  		</li>
  
	</ul>
</div>	