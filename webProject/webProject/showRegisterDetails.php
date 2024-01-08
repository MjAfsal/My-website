<?php
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "finalproject1";

$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()) {
    die('Connect Error (' . mysqli_connect_errno() . ') '
        . mysqli_connect_error());
}

$query = "select * from register";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Our Stock</title>

    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css" integrity="sha384-GLhlTQ8iFZLp3Un3+U8U8YXRaL6NHT5aP8SA9bz5l1+q1Q1g2rg5A8gsyZgO8n" crossorigin="anonymous">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=MuseoModerno:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=MuseoModerno:wght@0,100;0,200;...and-so-on&display=swap" rel="stylesheet">
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
            --big-font: 5.5rem;
            --p-font: 1rem;
        }

        body {
            font-size: var(--p-font);
            background-color: var(--bg-color);
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        table {
            margin-top: 20px;
            border-collapse: collapse;
            width: 80%;
            background-color: var(--second-color);
        }

        th,
        td {
            border: 1px solid var(--other-color);
            padding: 10px;
            text-align: center;
            color: var(--text-color);
        }

        th {
            background-color: var(--main-color);
            color: var(--second-color);
        }

        tr:nth-child(even) {
            background-color: var(--second-color);
        }
    </style>
</head>

<body>
    <table align="center" border="1px" style="width:600px; line-height:40px;">
        <tr>
            <th colspan="4">
                <h2>Registered accounts</h2>
            </th>
        </tr>
        <tr>
            <th>User Name</th>
            <th>Email Id</th>
            <th>User type</th>
        </tr>

        <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $row['username']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['user_type']; ?></td>
            </tr>
        <?php } ?>

    </table>
</body>

</html>