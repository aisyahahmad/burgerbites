<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtm1l1/DTD/xhtml1-transitional.dtd">
<html xmlns="http: //www.w3.org/1999/xhtm1">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Untitled Document</title>
</head>

<body>
    <?php include("Header.php"); ?>

    <h2> Search result </h2>

    <?php

    $in = $_POST['id'];
    $in = mysqli_real_escape_string($connect, $in);

    $q = "SELECT id, name, food_name, order_details, address, number, how_much, when_you_want FROM table_order WHERE id = '$in' ORDER BY id";

    $result = @mysqli_query($connect, $q);

    if ($result) {
        echo '<table border="2">
<tr><td><b>ID</b></td>
<td><b>NAME</b></td>
<td><b>FOOD MENU</b></td>
<td><b>ORDER DETAILS</b></td>
<td><b>ADDRESS</b></td>
<td><b>NUMBER</b></td>
<td><b>HOW MUCH</b></td>
<td><b>WHEN YOU WANT</b></td>
</tr>';

        //fetch and display record
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            echo '<tr>
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
        echo '</table>';
        mysqli_free_result($result);
    } else {
        echo '<p class="error"> If no record is shown, this is because you had an incorrect or missing entry in search form.<br>Click the back button on the browser and try again.</p>';
        echo '<p>' . mysqli_error($connect) . '<br><br/>Query:' . $q . '</p>';
    }
    mysqli_close($connect);
    ?>
</body>

</html>