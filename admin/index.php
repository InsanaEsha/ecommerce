<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin Dashborad</title>
	 <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- custom css -->
    <link rel="stylesheet" href="../style.css">
    <!-- fontawesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    
    <style>
    	.admin-img{
			width: 100px;
			object-fit: contain;
		}
		button{
			border: none;
		}
    </style>
</head>
<body>
	<div class="container-fluid p-0">
		<!-- first child -->
		<nav class="navbar navbar-expand-lg navbar-light bg-info">
			<div class="container-fluid">
				<img src="../img/logo.jpg" alt="logo" class="logo">
				<nav class="navbar navbar-expand-lg">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a href="" class="nav-link">Welcome Guest</a>
						</li>
					</ul>
				</nav>
			</div>
		</nav>
		<!-- second child -->
		<div class="bg-light">
			<h3 class="text-center p-2">Manage Details</h3>
		</div>
		<!-- third child -->
		<div class="manage bg-secondary py-4">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<img src="../img/honey.png" alt="not found" class="admin-img">
						<p>Admin name</p>
					</div>
					<div class="col-md-8">
						<button><a href="insertProduct.php" class="nav-link text-light bg-info p-3 my-2">Insert Product</a></button>
						<button><a href="" class="nav-link text-light bg-info p-3 my-2">View Product</a></button>
						<button><a href="index.php?insertCatagory" class="nav-link text-light bg-info p-3 my-2">Insert Catagories</a></button>
						<button><a href="" class="nav-link text-light bg-info p-3 my-2">View Catagories</a></button>
						<button><a href="index.php?insertBrand" class="nav-link text-light bg-info p-3 my-2">Insert Brand</a></button><br><br>
						<button><a href="" class="nav-link text-light bg-info p-3 my-2">View Brand</a></button>
						<button><a href="" class="nav-link text-light bg-info p-3 my-2">All Order</a></button>
						<button><a href="" class="nav-link text-light bg-info p-3 my-2">All Payment</a></button>
						<button><a href="" class="nav-link text-light bg-info p-3 my-2">Users List</a></button>
						<button><a href="" class="nav-link text-light bg-info p-3 my-2">Logout</a></button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- fourth child -->
	<div class="container my-4">
		<?php
			if(isset($_GET['insertCatagory'])){
				include 'insertCatagory.php';
			}
		?>
		<?php
			if(isset($_GET['insertBrand'])){
				include 'insertBrand.php';
			}
		?>
	</div>	
	<!--  bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>