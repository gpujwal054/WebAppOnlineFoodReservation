<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<title>View Product Items</title>
	</head>
	<body>
		<?php include 'header.php';?>
		<div class="container_wrapper" style="width: 100%;height: 515px">
		<?php include 'sidebar.php'; ?>
			<div class="content" style="width:70%;float:right;height:515px;background-color: #BFF908">
				<table class="table table-dark" id="item-table">
					<thead>
				    <tr>
				      <th scope="col">S.N</th>
				      <th scope="col">Menu Name</th>
				      <th scope="col">Category</th>
				      <th scope="col">Sub-category</th>
				      <th scope="col">Price</th>
				      <th scope="col">Description</th>
				      <th scope="col">Status</th>
				    </tr>
					</thead>
					<tbody>
					</tbody>
				</table>
			</div>
		</div>
		<?php include 'footer.php';?>
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<script type="text/javascript" src="https://www.gstatic.com/firebasejs/3.3.0/firebase.js"></script>
		<script type="text/javascript" src="admin.js"></script>
		<script type="text/javascript">
			var itemRef = firebase.database().ref('item');
			itemRef.on('value', function(itemData) {
				if (itemData.exists()) {
					var content='';
					var i=1;
					itemData.forEach(function(itemDataChild) {
						var item_name = itemDataChild.val().item_name;
						var category = itemDataChild.val().category;
						var sub_category = itemDataChild.val().sub_category;
						var price = itemDataChild.val().price;
						var description = itemDataChild.val().description;

						content += '<tr>';
						content += '<td>' + i + '</td>';
						content += '<td>' + item_name + '</td>';
						content += '<td>' + category + '</td>';
						content += '<td>' + sub_category + '</td>';
						content += '<td>' + price + '</td>';
						content += '<td>' + description + '</td>';
						content += '</tr>';
						i++;
					});
					$('#item-table').append(content);
				}
			});
		</script>
	</body>
</html>