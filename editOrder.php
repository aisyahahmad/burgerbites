<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Untitled Document</title>
	<link rel="stylesheet" type="text/css" href="includes.css" />
	<!-- font awesome cdn link  -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

	<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">

	<!-- custom css file link  -->
	<link rel="stylesheet" href="css/style.css">

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
			font-size: 15px;
		}
	</style>
</head>

<body>

	<?php include("header.php"); ?>
	<!-- header section starts     -->

	<section class="header">

		<a href="#" class="logo"> <i class="fas fa-utensils"></i> Burger Bites. </a>

		<nav class="navbar">
			<a href="listOrder.php">record</a>
			<a href="searchOrder.php">search</a>
		</nav>

		<div id="menu-btn" class="fas fa-bars"></div>

	</section>
	<br><br>
	<h2> Edit a record </h2>

	<?php
	//look for a valid user id, either through GET or POST
	if ((isset($_GET['id'])) && (is_numeric($_GET['id']))) {
		$id = $_GET['id'];
	} elseif ((isset($_POST['id'])) && (is_numeric($_POST['id']))) {
		$id = $_POST['id'];
	} else {
		echo '<p class ="error">This page has been accessed in error.</p>';
		exit();
	}

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$error = array();

		//look for name
		if (empty($_POST['name'])) {
			$error[] = 'You forgot to enter the First name.';
		} else {
			$n = mysqli_real_escape_string($connect, trim($_POST['name']));
		}

		//look for food_name
		if (empty($_POST['food_name'])) {
			$error[] = 'You forgot to enter the food name.';
		} else {
			$fn = mysqli_real_escape_string($connect, trim($_POST['food_name']));
		}

		//look for order_details
		if (empty($_POST['order_details'])) {
			$error[] = 'You forgot to enter the order details.';
		} else {
			$od = mysqli_real_escape_string($connect, trim($_POST['order_details']));
		}


		//look for address
		if (empty($_POST['address'])) {
			$error[] = 'You forgot to enter the address.';
		} else {
			$d = mysqli_real_escape_string($connect, trim($_POST['address']));
		}


		//look for number
		if (empty($_POST['number'])) {
			$error[] = 'You forgot to enter the number.';
		} else {
			$nm = mysqli_real_escape_string($connect, trim($_POST['number']));
		}

		//look for how_much
		if (empty($_POST['how_much'])) {
			$error[] = 'You forgot to enter the how_much.';
		} else {
			$h = mysqli_real_escape_string($connect, trim($_POST['how_much']));
		}


		//look for when_you_want
		if (empty($_POST['when_you_want'])) {
			$error[] = 'You forgot to enter the when you want.';
		} else {
			$w = mysqli_real_escape_string($connect, trim($_POST['when_you_want']));
		}

		//if no problem occured
		if (empty($error)) {

			$q = "SELECT id FROM table_order WHERE name ='$n' AND id != $id";

			$result = @mysqli_query($connect, $q);

			if (mysqli_num_rows($result) == 0) {
				$q = "UPDATE table_order SET name='$n' , food_name = '$fn', order_details = '$od', address = '$d', number = '$nm', how_much = '$h', when_you_want = '$w' WHERE id='$id' LIMIT 1";

				$result = @mysqli_query($connect, $q);

				if (mysqli_affected_rows($connect) == 1) {

					echo '<h3>The record has been edited</h3>';
				} else {
					echo '<h3> Data already updated</h3>';
				}
			} else {
				echo '<p class="error">The no ic has already been registered</p>';
			}
		} else {
			echo '<p class ="error"> The following error (s) occurred: <br/>';
			foreach ($error as $msg) {
				echo " -$msg<br/> \n";
			}
			echo '</p><p>Please try again.</p>';
		}
	}

	$q = "SELECT name, food_name, order_details, address, number, how_much, when_you_want FROM table_order WHERE id=$id";
	$result = @mysqli_query($connect, $q);

	if (mysqli_num_rows($result) == 1) {
		//get patient information
		$row = mysqli_fetch_array($result, MYSQLI_NUM);
		//create the form
	?>
		<form action="editOrder.php" method="post">
			<table>
				<tr>
					<td style="width: 200px;">Name:</td>
					<td><input id="name" type="text" name="name" size="30" maxlength="30" value="<?php echo $row[0] ?>"></td>
				</tr>
				<tr>
					<td>Food Name:</td>
					<td><input id="food_name" type="text" name="food_name" size="30" maxlength="30" value="<?php echo $row[1] ?>"></td>
				</tr>
				<tr>
					<td>Order Details:</td>
					<td><input id="order_details" type="text" name="order_details" size="30" maxlength="30" value="<?php echo $row[2] ?>"></td>
				</tr>
				<tr>
					<td>Address:</td>
					<td><input id="address" type="text" name="address" size="30" maxlength="30" value="<?php echo $row[3] ?>"></td>
				</tr>
				<tr>
					<td>Number:</td>
					<td><input id="number" type="text" name="number" size="30" maxlength="30" value="<?php echo $row[4] ?>"></td>
				</tr>
				<tr>
					<td>How Much:</td>
					<td><input id="how_much" type="text" name="how_much" size="30" maxlength="30" value="<?php echo $row[5] ?>"></td>
				</tr>
				<tr>
					<td>When You Want:</td>
					<td><input id="when_you_want" type="text" name="when_you_want" size="30" maxlength="30" value="<?php echo $row[6] ?>"></td>
				</tr>
				<tr>
					<td colspan="2"><input id="submit" type="submit" name="submit" value="Edit" style="float: right;">
						<input type="hidden" name="id" value="<?php echo $id ?>" />
					</td>
				</tr>
			</table>
		</form>
	<?php
	} else {
		echo '<p class="error"> This page has been acessed in error.</p>';
	}

	mysqli_close($connect);

	?>

	<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>

	<!-- custom js file link  -->
	<script src="js/script.js"></script>
</body>

</html>