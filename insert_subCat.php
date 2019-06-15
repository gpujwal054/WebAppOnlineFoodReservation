<!DOCTYPE html>
<html>
<head>
  <title>Insert Sub Category</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<?php include 'header.php';?>
    <div class="container_wrapper" style="width: 100%;height: 515px">
    <?php include 'sidebar.php'; ?>
        <div class="content" style="width:70%;float:right;height:515px;background-color: blue">
            <form class="col-10 offset-0 mt-5">
	            <div class="form-group row">
		            <label for="enterFoodName" class="col-2">Name of  Sub-Category</label>
		            <div class="col-10">
		                <input type="text" class="form-control form-control-sm" id="subCat_name" placeholder="Enter sub-category">
		                <script type="text/javascript" src="https://www.gstatic.com/firebasejs/3.3.0/firebase.js"></script>
		                <script type="text/javascript" src="admin.js"></script>
		            </div>
	            </div> 
	            <div class="form-group row">
		            <label for="enterFoodName" class="col-2">Name of Category</label>
		            <div class="col-10">
		            	<input type="text" class="form-control form-control-sm" id="cat_name" placeholder="Enter category">
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
		                <script type="text/javascript" src="file.js"></script>
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
		            <button type="submit" class="btn btn-primary" onclick="subcat()" >Submit</button>
		            </div>
	          	</div>
        	</form>
      	</div>
    </div> 
	<?php include 'footer.php';?>  
</body>
</html>