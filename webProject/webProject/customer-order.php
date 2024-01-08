<?php
session_start();
?>
<?php
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "finalproject1";

$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()) {
    die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
}

$logged_in_username = $_SESSION['username'];

$query = "SELECT * FROM orderdetails WHERE username='$logged_in_username'";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Orders</title>
    <!-- BoxIcons Link -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=MuseoModerno:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        :root {
            --text-color: #000000;
            --bg-color: #e5e5e5;
            --main-color: #f29494;
            --second-color: #fff;
            --orher-color: #868686;
            --big-font: 5.5rem;
            --p-font: 1rem;
        }

        body {
            font-size: var(--p-font);
            background-color: var(--bg-color);
            color: var(--text-color);
            font-family: 'MuseoModerno', sans-serif;
        }

        .orders-table {
            margin-top: 250px;
            margin: 250px auto;
            border-collapse: collapse;
            width: 850px;
        }

        th,
        td {
            border: 2px solid var(--other-color);
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: var(--main-color);
            color: var(--text-color);
        }

        tr:nth-child(even) {
            background-color: var(--second-color);
        }

        a {
            display: inline-block;
            padding: 5px 10px;
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
    <table class="orders-table">
        <tr>
            <th colspan="2">
                <h2>MY ORDERS</h2>
            </th>
        </tr>
        <tr>
            <th>Product Name</th>
            <th>Price</th>
        </tr>

        <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $row['Product_Name']; ?></td>
                <td><?php echo $row['price']; ?></td>
            </tr>
        <?php } ?>

    </table>
</body>

</html>