<?php
session_start();

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "finalproject1";

$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()) {
    die('Connect Error (' . mysqli_connect_errno() . ') '
        . mysqli_connect_error());
}

$query = "SELECT * FROM orderdetails";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Details</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: 'MuseoModerno', sans-serif;
            text-decoration: none;
            list-style: none;
        }

        :root {
            --text-color: #fff;
            --bg-color: #08162a;
            --main-color: #f29494;
            --second-color: #2b3544;
            --other-color: #868686;
            --big-font: 1.5rem;
            --p-font: 1rem;
        }

        body {
            font-size: var(--p-font);
            background-color: var(--bg-color);
        }

        table {
            color: #fff;
            margin: 20px auto;
            border-collapse: collapse;
            width: 800px;
            background-color: var(--bg-color);
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        th,
        td {
            border: 2px solid var(--other-color);
            padding: 15px;
            text-align: center;
        }

        th {
            background-color: var(--main-color);
            color: var(--text-color);
            font-size: var(--big-font);
        }

        tr:nth-child(even) {
            background-color: var(--second-color);
        }

        a {
            display: inline-block;
            padding: 8px 15px;
            margin: 3px;
            background-color: var(--main-color);
            color: var(--text-color);
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        a:hover {
            background-color: var(--bg-color);
        }
    </style>
</head>

<body>
    <table align="center" border="1px" style="width:600px; line-height:40px;">
        <tr>
            <th colspan="10">
                <h2>ORDER DETAILS</h2>
            </th>
        </tr>
        <tr>
            <th>Customer ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Address</th>
            <th>Mobile</th>
            <th>District</th>
            <th>Product Id</th>
            <th>Product Name</th>
            <th>Username</th>


        </tr>

        <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $row['Customer_Id']; ?></td>
                <td><?php echo $row['First_Name']; ?></td>
                <td><?php echo $row['Last_Name']; ?></td>
                <td><?php echo $row['Address']; ?></td>
                <td><?php echo $row['Mobile']; ?></td>
                <td><?php echo $row['District']; ?></td>
                <td><?php echo $row['Product_Id']; ?></td>
                <td><?php echo $row['Product_Name']; ?></td>
                <td><?php echo $row['username']; ?></td>

            </tr>
        <?php } ?>

    </table>
</body>

</html>