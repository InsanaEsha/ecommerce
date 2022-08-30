<?php
include('../includes/connect.php');
if(isset($_POST['insert_product'])){
	$product_title=$_POST['product_title'];
	$product_description=$_POST['description'];
	$product_keywords=$_POST['keywords'];
	$product_catagory=$_POST['product_catagory'];
	$product_brands=$_POST['product_brands'];
	$product_price=$_POST['product_price'];
	$product_status='true';

	//accesing images
	$product_image1=$_FILES['product_image1']['name'];
	$product_image2=$_FILES['product_image2']['name'];
	$product_image3=$_FILES['product_image3']['name'];
	
	//accessing images temp name
	$temp_image1=$_FILES['product_image1']['tmp_name'];
	$temp_image2=$_FILES['product_image2']['tmp_name'];
	$temp_image3=$_FILES['product_image3']['tmp_name'];

	//checking empty condition
	if($product_title=='' or $product_description=='' or $product_keywords=='' or $product_catagory=='' or $product_brands=='' or $product_price=='' or $product_image1=='' or $product_image2=='' or $product_image3==''){
		echo "<script>alert('please fill all the field available')</script>";
		exit();
	}
	else{
		move_uploaded_file($temp_image1,"./product_images/$product_image1");
		move_uploaded_file($temp_image2,"./product_images/$product_image2");
		move_uploaded_file($temp_image3,"./product_images/$product_image3");

		//inserting query
		//"insert into `table_name` (col1,col2,col3...) value('varchar type','varchar type','varchar type')"
		$insert_product="insert into `products` (product_title,product_description,product_keywords,catagory_id,brand_id,product_image1,product_image2,product_image3,product_price,date,status) value ('$product_title','$product_description','$product_keywords','$product_catagory','$product_brands','$product_image1','$product_image2','$product_image3','$product_price',NOW(),'$product_status')";
		$result_query=mysqli_query($con,$insert_product);
		if($result_query){
			echo "<script>alert('product succesfully inserted!')</script>";
		}

	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Insert Product - Admin Dashboard</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- custom css -->
    <link rel="stylesheet" href="../style.css">
</head>
<body class="bg-light">
	<div class="container">
		<h2 class="text-center my-3">Insert Product</h2>
		<!-- form -->
		<form action="" method="post" enctype="multipart/form-data">
			<!-- product title -->
			<div class="form-outline mb-4 w-50 m-auto">
				<label for="product_title" class="form-label">Product title</label>
				<input type="text" name="product_title" id="product_title" placeholder="Enter the product title" autocomplete="off" class="form-control" required="required">
			</div>
			<!-- description -->
			<div class="form-outline mb-4 w-50 m-auto">
				<label for="description" class="form-label">Product description</label>
				<input type="text" name="description" id="description" placeholder="Enter the product description" autocomplete="off" class="form-control" required="required">
			</div>
			<!-- keywords -->
			<div class="form-outline mb-4 w-50 m-auto">
				<label for="keywords" class="form-label">Product keywords</label>
				<input type="text" name="keywords" id="keywords" placeholder="Enter the product keywords" autocomplete="off" class="form-control" required="required">
			</div>
			<!--select catagory  -->
			<div class="form-outline mb-4 w-50 m-auto">
				<select name="product_catagory" id="" class="form-select">
					<option value="">Select a Catagory</option>
					<?php
						$select_query="select * from `catagories`";
						$result_query=mysqli_query($con,$select_query);
						while($row_data=mysqli_fetch_assoc($result_query)){
							$catagory_title=$row_data['catagory_name'];
							$catagory_id=$row_data['catagory_id'];
							echo "<option value='$catagory_id'>$catagory_title</option>";
						}

					?>
					
				</select>
			</div>
			<!-- select brands -->
			<div class="form-outline mb-4 w-50 m-auto">
				<select name="product_brands" id="" class="form-select">
					<option value="">Select a brand</option>
					<?php
						$select_query="select * from `brands`";
						$result_query=mysqli_query($con,$select_query);
						while($row_data=mysqli_fetch_assoc($result_query)){
							$brand_title=$row_data['brand_title'];
							$brand_id=$row_data['brand_id'];
							echo "<option value='$brand_id'>$brand_title</option>";
						}
					?>
					<!-- <option value="">brand1</option> -->
				</select>
			</div>
			<!-- product image 1 -->
			<div class="form-outline mb-4 w-50 m-auto">
				<label for="product_image1" class="form-label">Product image1</label>
				<input type="file" name="product_image1" id="product_image1" placeholder="Enter the product image 1" class="form-control" required="required">
			</div>
			<!-- product image 2 -->
			<div class="form-outline mb-4 w-50 m-auto">
				<label for="product_image2" class="form-label">Product image2</label>
				<input type="file" name="product_image2" id="product_image2" placeholder="Enter the product image 2" class="form-control" required="required">
			</div>
			<!-- product image 3 -->
			<div class="form-outline mb-4 w-50 m-auto">
				<label for="product_image3" class="form-label">Product image3</label>
				<input type="file" name="product_image3" id="product_image3" placeholder="Enter the product image 3" class="form-control" required="required">
			</div>
			<!-- price -->
			<div class="form-outline mb-4 w-50 m-auto">
				<label for="product_price" class="form-label">Product price</label>
				<input type="text" name="product_price" id="product_price" placeholder="Enter the product product price" autocomplete="off" class="form-control" required="required">
			</div>
			<!-- submit button -->
			<div class="form-outline mb-4 w-50 m-auto">
				<input type="submit" name="insert_product" class="btn btn-info mb-3" value="Insert Product">
			</div>
		</form>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>