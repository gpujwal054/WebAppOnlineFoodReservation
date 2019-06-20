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
	      	<form class="col-10 offset-0 mt-5">
			  	<div class="form-group row">
				    <label for="enterFoodName" class="col-2">Name of product</label>
				    <div class="col-10">
				    	<input type="text" class="form-control form-control-sm" id="food_name" placeholder="Enter food name">
				    	<script type="text/javascript" src="https://www.gstatic.com/firebasejs/3.3.0/firebase.js"></script>
				    	<script type="text/javascript" src="admin.js"></script>
					</div>
			  	</div>
			  	<div class="form-group row">
			    	<label for="enterFoodCategory" class="col-2">Category</label>
			    	<script type="text/javascript" src="https://www.gstatic.com/firebasejs/3.3.0/firebase.js"></script>
				    <script type="text/javascript" src="admin.js"></script>
				    <div class="col-10">
				    	<select class="form-control form-control-sm" id="category">
				    		<option value="food">Food</option>
				    		<option value="dessert">Dessert</option>
				    		<option value="bar">Bar</option>
				    		<option value="drink">Drink</option>
				    	</select>
				  	</div>
			  	</div>
			  	<div class="form-group row">
			    	<label for="enterFoodCategory" class="col-2">Sub-Category</label>
			    	<script type="text/javascript" src="https://www.gstatic.com/firebasejs/3.3.0/firebase.js"></script>
				    	<script type="text/javascript" src="admin.js"></script>
				    <div class="col-10">
				    	<select class="form-control form-control-sm" id="sub_category">
				    		<option value="none">None</option>
				    		<option value="veg">Veg</option>
				    		<option value="buff">Buff</option>
				    		<option value="chicken">Chicken</option>
				    		<option value="beaf">Beaf</option>
				    		<option value="chicken_mushroom">Chicken Mushroom</option>
				    		<option value="cheese_tomato_pizza">Cheese Tomato Pizza</option>
				    		<option value="chicken_tomato_pizza">Chicken Tomato Pizza</option>
				    		<option value="mushroom_pizza">Mush Room Pizza</option>
				    		<option value="milk_tea">Milk Tea</option>
				    		<option value="black_tea">Black Tea</option>
				    		<option value="flavoured Tea">Flavoured Tea</option>
				    	</select>
				  	</div>
			  	</div>	
			  	<div class="form-group row">
				    <label for="enterPrice" class="col-2">Price</label>
				    <div class="col-10">
				    	<input type="text" class="form-control form-control-sm" id="price" placeholder="Enter price">
				    	<script type="text/javascript" src="https://www.gstatic.com/firebasejs/3.3.0/firebase.js"></script>
				    	<script type="text/javascript" src="admin.js"></script>
			    	</div>
			  	</div>
			  	<div class="form-group row">
				    <label for="description" class="col-2">Description</label>
				    <div class="col-10">
				    	<input type="text" class="form-control form-control-sm" id="desc" placeholder="Description">
				    	<script type="text/javascript" src="https://www.gstatic.com/firebasejs/3.3.0/firebase.js"></script>
				    	<script type="text/javascript" src="admin.js"></script>
			    	</div>
			  	</div>
			  	<div class="form-group row">
				    <label for="imageFile" class="col-2">Image</label>
				    <div class="col-10">
				    	<progress value="0" max="100" id="uploader">0%</progress>
				    	<input type="file" class="form-control form-control-sm" id="fileButton" placeholder="Description">
				    	<script type="text/javascript" src="https://www.gstatic.com/firebasejs/3.3.0/firebase.js"></script>
				    	<script type="text/javascript" src="admin.js"></script>
			    	</div>
			  	</div>
			  	<div class="form-group row">
				    <label for="keywordField" class="col-2">Keywords</label>
				    <div class="col-10">
				    	<input type="text" class="form-control form-control-sm" id="kwrd" placeholder="Keyword">
				    	<script type="text/javascript" src="https://www.gstatic.com/firebasejs/3.3.0/firebase.js"></script>
				    	<script type="text/javascript" src="admin.js"></script>
			    	</div>
			  	</div>
		  		<div class="form-group row">
		  			<label class="col-2"></label>
		  			<div class="col-8">
			  			<button type="submit" class="btn btn-primary" onclick="item()" >Submit</button>
			  		</div>
				</div>
			</form>
		</div>
	</div>
	<?php include 'footer.php';?>   
</body>
</html>