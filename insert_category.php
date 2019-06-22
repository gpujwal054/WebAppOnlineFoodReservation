<!DOCTYPE html>
<html>
<head>
	<title>Insert Category</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<?php include 'header.php';?>
	<div class="container_wrapper" style="width: 100%;height: 515px">
	<?php include 'sidebar.php'; ?>
    <div class="content" style="width:70%;float:right;height:515px;background-color: #BFF908">
      	<form class="col-12 offset-0 mt-5">
		  	<div class="form-group row">
			    <label for="enterFoodName" class="col-3">Name of Category</label>
			    <div class="col-8" style="padding-left: 0px">
			    	<input type="text" class="form-control form-control-sm"  id="cat_name" placeholder="Enter category">
				</div>
		  	</div>	
		  	<div class="form-group row">
			    <label for="description" class="col-3">Description</label>
			    <div class="col-8" style="padding-left: 0px">
			    	<input type="text" class="form-control form-control-sm" id="desc" placeholder="Description">
		    	</div>
		  	</div>
		  	<div class="form-group row">
			    <label for="imageFile" class="col-3">Image</label>
			    <div class="col-8" style="padding-left: 0px">
			    	<progress value="0" max="100" id="uploader">0%</progress>
			    	<input type="file" class="form-control form-control-sm" id="fileButton" placeholder="Description">
		    	</div>
		  	</div>
		  	<div class="form-group row">
			    <label for="keywordField" class="col-3">Keywords</label>
			    <div class="col-8" style="padding-left: 0px">
			    	<input type="text" class="form-control form-control-sm" id="kwrd" placeholder="Keyword">
		    	</div>
		  	</div>
	  		<div class="form-group row">
	  			<label class="col-3"></label>
	  			<div class="col-8">
		  			<button type="button" class="btn btn-primary" onclick="cats()" >Submit</button>
		  		</div>
			</div>
		</form>
	</div>
	</div>  
	<?php include 'footer.php';?> 
	<script type="text/javascript" src="https://www.gstatic.com/firebasejs/3.3.0/firebase.js"></script>
	<script type="text/javascript" src="admin.js"></script>
</body>
</html>