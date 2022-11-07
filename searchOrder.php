<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.@ Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http: //www.w3.org/1999/xhtm1">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="includes.css" />
	<!-- font awesome cdn link  -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

	<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">

	<!-- custom css file link  -->
	<link rel="stylesheet" href="css/style.css">
<title>Untitled Document</title>

    <style>
		input {
			width: 200px;
			margin: 1rem 0;
			padding: 1.2rem 1.4rem;
			font-size: 1.7rem;
			color: var(--light-black);
			border: var(--border);
			text-transform: none;
		}

		table td{
			font-size: 18px;
		}
	</style>
</head>



<body>
<?php include ("header.php") ?>

	<!-- header section starts     -->

	<section class="header">

		<a href="#" class="logo"> <i class="fas fa-utensils"></i> Burger Bites. </a>

    </section>
<br><br>

<form action ="recordfound_order.php" method="post">

<br><br>
<h1>Search order record </h1>
<p><label class ="label" for ="food_name"> ID: </label>
<input id ="id" type="text" name ="id" size="30" maxlength="30"
value="<?php if (isset($_POST['id'])); ?>" /></p>

<p><input id = "submit" type="submit" name="submit" value="search" /></p>
</form>

<!-- footer section ends  -->

	<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>

	<!-- custom js file link  -->
	<script src="js/script.js"></script>
</body>
</html>