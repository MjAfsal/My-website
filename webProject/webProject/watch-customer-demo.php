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
            --text-color: #000000;
            --bg-color: #e5e5e5;
            --main-color: #f29494;
            --second-color: #fff;
            --orher-color: #868686;
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

        .main-content {
            display: flex;
            width: 100%;
        }

        .product-container {
            display: flex;
            flex-wrap: wrap;
            width: 100%;
            justify-content: space-between;
        }

        .product-row {
            display: flex;
            flex-wrap: wrap;
            justify-content: end;
            width: 100%;
        }

        .product-box {
            width: calc(20% - 25px);
            background-color: var(--second-color);
            border: 2px solid var(--other-color);
            padding: 50px;
            margin: 10px;
            box-shadow: 0 20px 20px rgba(0, 0, 0, 0.8);
            transition: box-shadow 0.3s ease;
            display: flex;
            flex-direction: column;
            border-radius: 2rem;
            align-items: center;
            justify-items: center;

        }

        .product-box:hover {
            transform: scale3d(1.1, 1.1, 1.1);
        }

        .product-name {
            color: var(--main-color);
            font-size: var(--p-font);
        }

        .product-box p {
            margin: 10px 0;
        }

        .out-of-stock {
            color: red;
            font-weight: bold;
        }


        img {
            max-width: 70%;
            height: auto;
            margin-top: 10px;
        }

        header {
            position: sticky;
            top: 0;
            right: 0;
            z-index: 1000;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 20px 30%;
            transition: all ease .55s;
        }

        .logo {
            display: flex;
            align-items: center;
            color: var(--text-color);
            font-size: 50px;
            font-weight: bold;
        }

        .logo i {
            vertical-align: middle;
            color: var(--text-color);
            font-size: 60px;
            margin-right: 10px;
        }

        .navlist {
            display: flex;
            justify-content: center;
            background-color: var(--main-color);
            padding: 10px;
        }

        .navlist a {
            font-size: var(--p-font);
            color: var(--text-color);
            font-weight: 600;
            margin: 0 35px;
            transition: all ease .55s;
        }

        .navlist a:hover {
            color: var(--main-color);
        }

        .navlist a.active {
            color: var(--main-color);
        }
    </style>
</head>

<body>

    <header>
        <a href="#" class="logo"><i class='bx bxs-watch-alt'></i>Watches In Our Store</a>
    </header>

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

            $productType = "watche_details";

            if (isset($_GET['productType'])) {
                $productType = $_GET['productType'];
            }

            $sql = "SELECT Pro_Id, Pro_Name, Quantity, Price, Image FROM $productType";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo '<a href="login-watch.php">';
                echo '<div class="product-row">';
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="product-box">';
                    echo '<h2 class="product-name">' . $row['Pro_Name'] . '</h2>';
                    echo '<p><strong>Product ID:</strong> ' . $row['Pro_Id'] . '</p>';
                    echo '<p><strong>Price:</strong> ' . $row['Price'] . '</p>';

                    // if ($row['Quantity'] <= 0) {
                    //     echo '<p class="out-of-stock">This product is out of stock</p>';
                    // } else {
                    //     echo '<button type="button" class="add-to-cart" data-id="' . $row['Pro_Id'] . '" data-name="' . $row['Pro_Name'] . '" data-price="' . $row['Price'] . '">Add To Cart</button>';

                    //     echo '<button type="button"><a href="Buy_Now_Form-watches.php?productId=' . $row['Pro_Id'] . '">Buy Now</a></button>';
                    // }

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

    </div>

    <script>
        const sr = ScrollReveal({
            distance: '70px',
            duration: 1850,
            reset: true,
            scroll: true
        });

        sr.reveal('.product-container', {
            delay: 200,
            origin: 'bottom'
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

</body>

</html>