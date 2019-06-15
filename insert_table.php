<!DOCTYPE html>
<html>
<head>
	<title>Insert Product</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<?php include 'header.php';?>
	<div class="container_wrapper" style="width: 100%;height: 515px">
	<?php include 'sidebar.php'; ?>   
	<div class="content" style="width:70%;float:right;height:515px;background-color: blue">
      	<form class="col-10 offset-0 mt-5">
		  	<div class="form-group row">
			    <label for="enterFoodName" class="col-2">Name of table</label>
			    <div class="col-10">
			    	<input type="text" class="form-control form-control-sm" id="tab_name" placeholder="Enter table name">
			    	<script type="text/javascript" src="https://www.gstatic.com/firebasejs/3.3.0/firebase.js"></script>
			    	<script type="text/javascript" src="admin.js"></script>
				</div>
		  	</div>
		  	<div class="form-group row">
		    	<label for="enterFoodCategory" class="col-2">Number of chairs</label>
		    	<div class="col-10">
			    	<input type="text" class="form-control form-control-sm" id="tab_name" placeholder="Enter number of chairs">
			    	<script type="text/javascript" src="https://www.gstatic.com/firebasejs/3.3.0/firebase.js"></script>
			    	<script type="text/javascript" src="admin.js"></script>
				</div>
		  	</div>	
		  	<div class="form-group row">
			    <label for="enterPrice" class="col-2">Location of table</label>
			    <div class="col-10">
			    	<input type="text" class="form-control form-control-sm" id="price" placeholder="Location of table">
			    	<script type="text/javascript" src="https://www.gstatic.com/firebasejs/3.3.0/firebase.js"></script>
			    	<script type="text/javascript" src="admin.js"></script>
		    	</div>
		  	</div>
	  		<div class="form-group row">
	  			<label class="col-2"></label>
	  			<div class="col-8">
		  			<button type="submit" class="btn btn-primary" onclick="tabs()" >Submit</button>
		  		</div>
			</div>
		</form>
	</div>
	</div>
	<?php include 'footer.php';?>
</body>
</html>