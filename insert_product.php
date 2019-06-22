<!DOCTYPE html>
<html>
<head>
	<title>Insert Product</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<?php include 'header.php';?>
	<div class="container_wrapper" style="width: 100%;height: 515px">
	<?php include 'sidebar.php' ?>
	    <div class="content" style="width:70%;float:right;height:515px;background-color: #BFF908">
	      	<form class="col-12 offset-0 mt-5">
			  	<div class="form-group row">
				    <label for="enterFoodName" class="col-3">Name of product</label>
				    <div class="col-8" style="padding-left: 0px">
				    	<input type="text" class="form-control form-control-sm" id="food_name" placeholder="Enter food name">
					</div>
			  	</div>
			  	<div class="form-group row">
			    	<label for="enterFoodCategory" class="col-3">Category</label>
				    <div class="col-8" style="padding-left: 0px">
				    	<select class="form-control form-control-sm" id="category">	
				    	</select>
				  	</div>
			  	</div>
			  	<div class="form-group row">
			    	<label for="enterFoodCategory" class="col-3">Sub-Category</label>
				    <div class="col-8" style="padding-left: 0px">
				    	<select class="form-control form-control-sm" id="sub-category">
				    	</select>
				  	</div>
			  	</div>	
			  	<div class="form-group row">
				    <label for="enterPrice" class="col-3">Price</label>
				    <div class="col-8" style="padding-left: 0px">
				    	<input type="text" class="form-control form-control-sm" id="price" placeholder="Enter price">
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
				    	<input type="file" class="form-control form-control-sm" id="fileButton">
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
		  			<div class="col-8" style="padding-left: 0px">
			  			<button type="submit" class="btn btn-primary" onclick="item()" >Submit</button>
			  		</div>
				</div>
			</form>
		</div>
	</div>
	<?php include 'footer.php';?> 
	<script type="text/javascript" src="https://www.gstatic.com/firebasejs/3.3.0/firebase.js"></script>
	<script type="text/javascript" src="admin.js"></script>  
	<script type="text/javascript">
		var categoryElement = document.getElementById('category');
		var categoryRef = firebase.database().ref('category');
		categoryRef.on('value', function(categoryData) {
		    categoryData.forEach(function(categoryDataChild) {
		      var category = categoryDataChild.val();
		      categoryElement.innerHTML = categoryElement.innerHTML +
                '<option value="' + category['Category Name'] + '">' + category['Category Name'] + '</option>';
		    });
		});
		var subCategoryElement = document.getElementById('sub-category');
		var subCategoryRef = firebase.database().ref('sub-category');
		subCategoryRef.on('value', function(subCategoryData) {
		    subCategoryData.forEach(function(subCategoryDataChild) {
		      var subCategory = subCategoryDataChild.val();
		      subCategoryElement.innerHTML = subCategoryElement.innerHTML +
                '<option value="' + subCategory['Category Name'] + '">' + subCategory['Category Name'] + '</option>';
		    });
		});
	</script>
</body>
</html>