<link rel="stylesheet" href="css/jquery.fileupload-ui.css">
  <form id="fileupload" action="server/php/" method="POST" enctype="multipart/form-data">
  
    <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
    <div class="fileupload-buttonbar">
      
      <!-- The fileinput-button span is used to style the file input field as button -->
      <span class="btn btn-success fileinput-button">
        <i class="icon-plus icon-white"></i>
        <span>Add files...</span>
        <input type="file" name="files[]" multiple>
      </span>
                
      <div id="remove">
        <button type="button" class="btn btn-danger delete">
          <i class="icon-trash icon-white"></i>
          <span>Delete</span>
        </button>
       
         <input type="checkbox" class="toggle">
       </div>
     </div>
        
     <!-- The loading indicator is shown during file processing -->
     <div class="fileupload-loading"></div>
     <br>
     
     <!-- The table listing the files available for upload/download -->
     <table role="presentation" class="table table-striped">
       <tbody class="files" data-toggle="modal-gallery" data-target="#modal-gallery"></tbody>
      </table>
  </form>
<!-- The template to display files available for upload -->
<script id="template-upload" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
    
	<tr class="template-upload fade">
        
		<td class="preview">
			<span class="fade">
			</span>
		</td>
        
		<td class="name">
			<span>
				{%=file.name%}
			</span>
		</td>

        <td class="size">
			<span>
				{%=o.formatFileSize(file.size)%}
			</span>
		</td>
        
		{% if (file.error) { %}
            <td class="error" colspan="2">
				<span class="label label-important">
					Error
				</span> 
				{%=file.error%}
			</td>
        
		{% } else if (o.files.valid && !i) { %}
            <td>
                <div class="progress progress-success progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
					<div class="bar" style="width:0%;">
					</div>
				</div>
            </td>
            
			<td class="start">
				{% if (!o.options.autoUpload) { %}
                	<button class="btn btn-primary">
                    	<i class="icon-upload icon-white"></i>
                    	<span>
							Start
						</span>
                	</button>
            	{% } %}
			</td>
        
		{% } else { %}
            <td colspan="2">
			</td>
        {% } %}
        
		<td class="cancel">
			{% if (!i) { %}
            	<button class="btn btn-warning">
                	<i class="icon-ban-circle icon-white"></i>
                	<span>
						Cancel
					</span>
            	</button>
        	{% } %}
		</td>
    </tr>
{% } %}
</script>

<!-- The template to display files available for download -->
<script id="template-download" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
    
	<tr class="template-download fade">
        
		{% if (file.error) { %}
            
			<td>
			</td>
            
			<td class="name">
				<span>
					{%=file.name%}
				</span>
			</td>
            
			<td class="size">
				<span>
					{%=o.formatFileSize(file.size)%}
				</span>
			</td>
            
			<td class="error" colspan="2">
				<span class="label label-important">
					Error
				</span> 
				{%=file.error%}
			</td>
        
		{% } else { %}
            
			<td class="preview">
				{% if (file.thumbnail_url) { %}
                	<a href="{%=file.url%}" title="{%=file.name%}" rel="gallery" download="{%=file.name%}">
						<img src="{%=file.thumbnail_url%}">
					</a>
            	{% } %}
			</td>
            
			<td class="name">
                <a href="{%=file.url%}" title="{%=file.name%}" rel="{%=file.thumbnail_url&&'gallery'%}" download="{%=file.name%}">
					{%=file.name%}
				</a>
            </td>
            
			<td class="size">
				<span>
					{%=o.formatFileSize(file.size)%}
				</span>
			</td>
            
			<td colspan="2"></td>
        
		{% } %}
        
		<td class="delete">
			<div id="rowDelete">
            	<button class="btn btn-danger" data-type="{%=file.delete_type%}" data-url="{%=file.delete_url%}">
                	<i class="icon-trash icon-white"></i>
                	<span>Delete</span>
            	</button>
            	<input type="checkbox" name="delete" value="1">
			</div>
        </td>
    </tr>
{% } %}
</script>


<!-- 

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -- >
<script src="js/vendor/jquery.ui.widget.js"></script>
<!-- The Templates plugin is included to render the upload/download listings -- >
<script src="http://blueimp.github.com/JavaScript-Templates/tmpl.min.js"></script>
<!-- The Load Image plugin is included for the preview images and image resizing functionality -- >
<script src="http://blueimp.github.com/JavaScript-Load-Image/load-image.min.js"></script>
<!-- The Canvas to Blob plugin is included for image resizing functionality -- >
<script src="http://blueimp.github.com/JavaScript-Canvas-to-Blob/canvas-to-blob.min.js"></script>
<!-- Bootstrap JS and Bootstrap Image Gallery are not required, but included for the demo -- >
<script src="http://blueimp.github.com/cdn/js/bootstrap.min.js"></script>
<script src="http://blueimp.github.com/Bootstrap-Image-Gallery/js/bootstrap-image-gallery.min.js"></script>
<!-- The Iframe Transport is required for browsers without support for XHR file uploads -- >
<script src="js/jquery.iframe-transport.js"></script>
<!-- The basic File Upload plugin -- >
<script src="js/jquery.fileupload.js"></script>
<!-- The File Upload file processing plugin -- >
<script src="js/jquery.fileupload-fp.js"></script>
<!-- The File Upload user interface plugin -- >
<script src="js/jquery.fileupload-ui.js"></script>
<!-- The main application script -- >
<script src="js/main.js"></script>
<!-- The XDomainRequest Transport is included for cross-domain file deletion for IE8+ -->
<!--[if gte IE 8]><script src="js/cors/jquery.xdr-transport.js"></script><![endif]-->