<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping</title>

    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=MuseoModerno:wght@300;400;500;600;700&display=swap" rel="stylesheet">

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
            background-color: var(--bg-color);
            color: var(--text-color);
            padding: 20px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }


        .product-row {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .product-box {
            width: calc(20% - 20px);

            background-color: var(--second-color);
            border: 2px solid var(--other-color);
            padding: 20px;
            margin: 10px;
            box-shadow: 0 10px 10px rgba(0, 0, 0, 0.5);
            transition: box-shadow 0.6s ease;
            display: flex;
            flex-direction: column;
        }

        .product-box:hover {
            transform: scale3d(1.M_2_PI);
        }

        .product-name {
            color: var(--main-color);
            font-size: var(--p-font);
        }

        .product-box p {
            margin: 10px 0;
        }

        .out-of-stock {
            color: Red;
            font-weight: bold;
        }

        button {
            background-color: var(--main-color);
            color: var(--text-color);
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button a {
            color: var(--text-color);
            text-decoration: none;
        }

        button:hover {
            background-color: #e07373;

        }

        img {
            max-width: 70%;
            height: auto;
            margin-top: 10px;
        }

        nav {
            background-color: var(--text-color);
            padding: 10px 20px;
            margin-bottom: 20px;
            width: 100%;
            position: fixed;
            top: 0;
            left: 0;
        }

        ul {
            list-style: none;
            display: flex;
        }

        li {
            margin-right: 20px;
        }

        a {
            text-decoration: none;
            color: var(--text-color);
        }

        a:hover {
            color: var(--main-color);
        }

        body {
            padding-top: 60px;

        }


        .main-content {
            display: flex;
            justify-content: space-between;
        }

        .cart-container {
            background-color: var(--main-color);
            border: 2px solid var(--second-color);
            border-radius: 8px;
            padding: 20px;
            width: 100%;
        }

        .cart-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .cart-item button {
            background-color: var(--other-color);
            color: var(--text-color);
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .cart-item button:hover {
            background-color: #c55d5d;
        }

        hr {
            margin: 10px 0;
            border: 1px solid var(--text-color);
        }

        .total {
            font-weight: bold;
        }
    </style>
</head>

<body>

    <nav>
        <ul>

        </ul>
    </nav>

    <div class="main-content">
        <div class="product-container">
            <?php
            $host = "localhost";
            $dbusername = "root";
            $dbpassword = "";
            $dbname = "finalproject1";


            $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);


            if ($conn->connect_error) {
                die('Connect Error (' . $conn->connect_errno . ') ' . $conn->connect_error);
            }

            $productType = "phone_details";

            if (isset($_GET['productType'])) {
                $productType = $_GET['productType'];
            }

            $sql = "SELECT Pro_Id, Pro_Name, Quantity, Price, Image FROM $productType";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo '<div class="product-row">';
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="product-box">';
                    echo '<h2 class="product-name">' . $row['Pro_Name'] . '</h2>';
                    echo '<p><strong>Product ID:</strong> ' . $row['Pro_Id'] . '</p>';
                    echo '<p><strong>Available stock:</strong> ' . $row['Quantity'] . '</p>';
                    echo '<p><strong>Price:</strong> ' . $row['Price'] . '</p>';

                    if ($row['Quantity'] <= 0) {
                        echo '<p class="out-of-stock">This product is out of stock</p>';
                    } else {

                        echo '<button type="button" class="add-to-cart" data-id="' . $row['Pro_Id'] . '" data-name="' . $row['Pro_Name'] . '" data-price="' . $row['Price'] . '">Add To Cart</button>';

                        echo '<button type="button"><a href="login.php?redirect=BuyNowForm.php&productId=' . $row['Pro_Id'] . '">Buy Now</a></button>';
                    }


                    if (!empty($row['Image'])) {
                        echo '<img src="' . $row['Image'] . '" alt="' . $row['Pro_Name'] . '">';
                    }

                    echo '</div>';
                }
                echo '</div>';
            } else {

                echo '<p>No products found</p>';
            }


            $conn->close();

            ?>
        </div>

        <div class="cart-container">
            <h3>Your Cart</h3>
            <div id="cart-content">
                <p>Your cart is empty</p>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="cart.js"></script>
</body>

</html>