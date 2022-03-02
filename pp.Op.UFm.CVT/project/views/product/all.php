<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title></title>
</head>
<body>
	<div class="container">
		<table class="table table-striped">
		    <tr class="table-primary">
		  	    <th>Name</th>
		    	<th>Price</th>
		    	<th>Quantity</th>
		    	<th>Category</th>
		  	</tr>

		<?php
			foreach ($products as $product) { ?>
			  	<tr>
			    	<td><?php echo $product['name']; ?></td>
			    	<td><?php echo $product['price']; ?></td>
			    	<td><?php echo $product['quantity']; ?></td>
			    	<td><?php echo $product['category']; ?></td>
			  	</tr>

		<?php 
			}
		?>

		</table>
		
	</div>

</body>
</html>