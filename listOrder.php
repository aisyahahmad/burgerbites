<!DOCTYPE html PUBLIC "-//W3c//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="includes.css" />
	<!-- font awesome cdn link  -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

	<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">

	<!-- custom css file link  -->
	<link rel="stylesheet" href="css/style.css">

	<style>
		table td {
			padding: 6px;
			border: 0.1px solid black;
		}

		table {
			width: 80%;
			background-color: #ffe9c7;
			border: 1px solid black;
			border-collapse: collapse;
		}

		.content{
			padding: 10px;
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
	<br>
	<div class="content">
		<h1>List Order</h1><br>
		<?php
		//make the query
		$q = "SELECT id, name, food_name, order_details, address, number, how_much, when_you_want FROM table_order ORDER BY id";

		//run the query</body>
		$result = @mysqli_query($connect, $q);

		//if it ran without a problem, display the records
		if ($result) {
			//Table heading
			echo '<table border="2">
	<tr><td><b>Edit</b></td>
	<td><b>Delete</b></td>
	<td><b>id</b></td>
	<td><b>Name</b></td>
	<td><b>Food Name</b></td>
	<td><b>Order Details</b></td>
	<td><b>Address</b></td>
	<td><b>Number</b></td>
	<td><b>How Much</b></td>
	<td><b>When You Want</b></td></tr>';


			//Fetch and print all the records
			while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
				echo '<tr>
		<td><a href = "editOrder.php?id=' . $row['id'] . '">Edit</a></td>
		<td><a href = "deleteOrder.php?id=' . $row['id'] . '">Delete</a></td>
		<td>' . $row['id'] . '</td>
		<td>' . $row['name'] . '</td>
		<td>' . $row['food_name'] . '</td>
		<td>' . $row['order_details'] . '</td>
		<td>' . $row['address'] . '</td>
		<td>' . $row['number'] . '</td>
		<td>' . $row['how_much'] . '</td>
		<td>' . $row['when_you_want'] . '</td>
		</tr>';
			}
			//close the table
			echo '</table>';

			//free up the resources
			mysqli_free_result($result);

			//if failed to run
		} else {

			//error message
			echo '<p class ="error"> The current student could not be retrieved. We apologize for any inconvenience.</p>';

			//debugging messange
			echo '<p>' . mysqli_error($connect) . '<br><br/>Query: ' . $q . '</p>';
		}   //end of it ($result)
		//close the databse connection
		mysqli_close($connect);
		?>
	</div>

	<!-- footer section ends  -->

	<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>

	<!-- custom js file link  -->
	<script src="js/script.js"></script>
</body>

</html>