<div class="container">
  <div class="row">
    <div class="span12">
    
      <div class="tabbable"> 
        <ul class="nav nav-tabs">  
	      <li class="active"> 
            <a data-toggle="tab" href="#home">Home</a>
  	      </li>
  
          <li> 
            <a data-toggle="tab" href="#upload">Upload</a>
      	  </li>
      
      	  <li>
            <a data-toggle="tab" href="#sort">Sort</a> 
      	  </li>
      
          <li>
            <a data-toggle="tab" href="#report">Report</a>
      	  </li>
      
      	  <li>	
      	    <a data-toggle="tab" href="#accountDetails">Account Details</a>
      	  </li>
      
        </ul>
    
        <div class="tab-content"> 
      
          <div class="tab-pane active" id="home"> 
            <?php require('User/home.php');?>
          </div> 
           
          <div class="tab-pane" id="upload"> 
            <?php require('User/upload.php');?> 
          </div> 
          
          <div class="tab-pane" id="sort"> 
            <p>Sort Tab</p> 
          </div> 
          
          <div class="tab-pane" id="report"> 
            <p>Report Tab</p> 
          </div> 
          
          <div class="tab-pane" id="accountDetails"> 
            <p>AccountDetails Tab</p> 
          </div>     
        
        </div>
      </div>
    </div>  
  </div>
</div>

<script src="js/jquery.js"></script>  
<script src="js/bootstrap-tab.js"></script>  
<script src="js/jquery.ui.widget.js"></script>

<!-- The Templates plugin is included to render the upload/download listings -->
<script src="http://blueimp.github.com/JavaScript-Templates/tmpl.min.js"></script>
<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
<script src="http://blueimp.github.com/JavaScript-Load-Image/load-image.min.js"></script>
<!-- The Canvas to Blob plugin is included for image resizing functionality -->
<script src="http://blueimp.github.com/JavaScript-Canvas-to-Blob/canvas-to-blob.min.js"></script>
<!-- Bootstrap JS and Bootstrap Image Gallery are not required, but included for the demo -->
<script src="http://blueimp.github.com/cdn/js/bootstrap.min.js"></script>
<script src="http://blueimp.github.com/Bootstrap-Image-Gallery/js/bootstrap-image-gallery.min.js"></script>

<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
<script src="js/jquery.iframe-transport.js"></script>
<!-- The basic File Upload plugin -->
<script src="js/jquery.fileupload.js"></script>
<!-- The File Upload file processing plugin -->
<script src="js/jquery.fileupload-fp.js"></script>
<!-- The File Upload user interface plugin -->
<script src="js/jquery.fileupload-ui.js"></script>
<!-- The main application script -->
<script src="js/main.js"></script>

