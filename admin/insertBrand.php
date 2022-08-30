<?php
include '../includes/connect.php';

if(isset($_POST['insert_brand'])){
	$brand_title = $_POST['brand_title'];
	// INSERT INTO table_name (column1, column2, column3,...)
	// VALUES (value1, value2, value3,...)
	$select_query = "Select * from `brands` where brand_title='$brand_title'";
	$result_select = mysqli_query($con,$select_query);
	$number = mysqli_num_rows($result_select);
	if($number>0){
		echo "<script>alert('this brand is presnet already')</script>";
	}
	else{
		$insert_query = "insert into `brands` (brand_title) value ('$brand_title')";
		$result = mysqli_query($con,$insert_query);
		if($result){
			echo "<script>alert('this brand successfully added')</script>";
		}
	}

}

?>
<h2 class="text-center py-3">Insert Brand</h2>
<form action="" method="post">
	<div class="input-group mb-3 w-90">
	  <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-thumbtack"></i></span>
	  <input type="text" class="form-control" name="brand_title" placeholder="Insert Brand" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    <div class="input-group mb-3 w-10">
	  <input type="submit" class="text-white text-center p-2 border-0 bg-info" name="insert_brand" value="Insert Brand" aria-label="Username" aria-describedby="basic-addon1">
    </div>
</form>