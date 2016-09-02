<?php
	//Part 1 Upload Files

	//Create form
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<link href="http://cdn.jsdelivr.net/foundation/5.0.2/css/foundation.css" rel="stylesheet" media="screen">
 	
 	<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.7.1/modernizr.min.js"></script>
	<title>SSL_1312 FINAL PART1 Upload</title>
</head>
<body>

<form method="POST" action="upload.php" enctype="multipart/form-data" >
	  <div class="row">
	    <div class="small-4"><h1>Part 1</h1>
	      <div class="row">
	        <div class="small-3 columns">
	          <label for="right-label" class="right inline">Upload photo</label>
	        </div>
	        <div class="small-9 columns">
	          <input type="file" id="right-label" name="upload"/>
	        </div>

	       	<div class="small-3 columns">
	       		<input type="submit" class="button postfix" value="Upload">
       		</div>

	        </div> <!--close row -->
	      </div>
	    </div>
	</form>

<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/foundation/5.0.2/js/foundation.min.js"></script>

</body>
</html>