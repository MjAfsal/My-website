<?php
session_start();
$productId = isset($_GET['productId']) ? $_GET['productId'] : 0;
$productName = isset($_GET["productName"]) ? $_GET["productName"] : '';
$price = isset($_GET["price"]) ? $_GET["price"] : 0;
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>

    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=MuseoModerno:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
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
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background-color: var(--bg-color);
        }

        form {
            margin-top: 250px;
            background-color: var(--second-color);
            padding: 50px;
            border-radius: 20px;
            box-shadow: 50px var(--text-color);
            width: 90%;
        }

        .form-label {
            color: var(--text-color);
            font-size: var(--p-font);
            margin-bottom: 8px;
        }

        .form-control {
            margin-bottom: 20px;
            width: 100%;
        }

        .form-select {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            border: 1px solid var(--orher-color);
            border-radius: 5px;
            box-sizing: border-box;
            cursor: pointer;
        }

        .btn-primary {
            background-color: var(--main-color);
            color: var(--second-color);
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }

        .btn-primary:hover {
            background-color: var(--other-color);
        }

        header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 27px 30%;
            transition: all ease .55s;
            background-color: var(--main-color);
        }


        .logo {
            display: flex;
            align-items: center;
            color: var(--text-color);
            font-size: 40px;
            font-weight: bold;
        }

        .logo i {
            vertical-align: middle;
            color: var(--text-color);
            font-size: 60px;
            margin-right: 5px;
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

        .flex-container {
            display: flex;
        }

        .col-md-6 {
            flex: 1;
        }
    </style>

</head>

<body>
    <div class="container">
        <div class="flex-container">
            <div class="col-md-6">

                <img src="20231207_203258.png" alt="Your Image" style="width: 100%; height: auto;">
            </div>
            <div class="col-md-6">

                <header>
                    <a href="#" class="logo"><i class='bx bxs-store-alt'></i>Fill This Form to Place The Order</a>
                </header>
                <form method="POST" onsubmit="return validateForm()">
                    <div class="mb-3">
                        <label for="fname" class="form-label">First Name</label><br>
                        <input type="text" class="form-control" id="fname" name="fname" aria-describedby="Help" required><br>
                    </div>

                    <div class="mb-3">
                        <label for="lname" class="form-label">Last Name</label><br>
                        <input type="text" class="form-control" id="lname" name="lname" aria-describedby="Help" required><br>
                    </div>

                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label><br>
                        <input type="text" class="form-control" id="address" name="address" aria-describedby="Help" required><br>
                    </div>

                    <div class="mb-3">
                        <label for="mnumber" class="form-label">Mobile Number</label><br>
                        <input type="text" class="form-control" id="mnumber" name="mnumber" aria-describedby="Help" required><br>
                    </div>

                    <div class="mb-3">
                        <label for="district" class="form-label">District</label><br>
                        <select class="form-select" name="district" id="district" aria-label="Default select example" required>
                            <option selected disabled>--Select--</option>
                            <option selected>--Select--</option>
                            <option value="Ampara">Ampara</option>
                            <option value="Badulla">Badulla</option>
                            <option value="Batticaloa">Batticaloa</option>
                            <option value="Colombo">Colombo</option>
                            <option value="Galle">Galle</option>
                            <option value="Gampaha">Gampaha</option>
                            <option value="Hambantota">Hambantota</option>
                            <option value="Jaffna">Jaffna</option>
                            <option value="Kalutara">Kalutara</option>
                            <option value="Kandy">Kandy</option>
                            <option value="Kegalle">Kegalle</option>
                            <option value="Kilinochchi">Kilinochchi</option>
                            <option value="Kurunegala">Kurunegala</option>
                            <option value="Mannar">Mannar</option>
                            <option value="Matale">Matale</option>
                            <option value="Matara">Matara</option>
                            <option value="Monaragala">Monaragala</option>
                            <option value="Mullaitivu">Mullaitivu</option>
                            <option value="Anuradhapura">Anuradhapura</option>
                            <option value="Nuwara Eliya">Nuwara Eliya</option>
                            <option value="Polonnaruwa">Polonnaruwa</option>
                            <option value="Puttalam">Puttalam</option>
                            <option value="Ratnapura">Ratnapura</option>
                            <option value="Trincomalee">Trincomalee</option>
                            <option value="Vavuniya">Vavuniya</option>
                        </select><br>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label><br>
                        <input type="text" class="form-control" id="price" name="price" value="<?php echo $price; ?>" readonly><br>
                    </div>

                    <input type="hidden" name="productId" value="<?php echo isset($_GET['productId']) ? $_GET['productId'] : 0; ?>">
                    <input type="hidden" name="productName" value="<?php echo $productName; ?>">

                    <button type="submit" class="btn btn-primary" name="submit">Place Order</button>
                </form>

                <script>
                    function validateForm() {
                        var fname = document.getElementById("fname").value;
                        var lname = document.getElementById("lname").value;
                        var address = document.getElementById("address").value;
                        var mnumber = document.getElementById("mnumber").value;
                        var district = document.getElementById("district").value;

                        if (fname === "" || lname === "" || address === "" || mnumber === "" || district === "--Select--") {
                            alert("Please fill out all the fields");
                            return false;
                        }

                        return true;
                    }
                </script>

                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</body>

</html>

<?php
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "finalproject1";

$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()) {
    die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_SESSION['username'])) {
        $username = $_SESSION['username'];

        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $address = $_POST["address"];
        $mnumber = $_POST["mnumber"];
        $district = $_POST["district"];

        $productId = isset($_POST["productId"]) ? $_POST["productId"] : 0;
        $productName = isset($_POST["productName"]) ? $_POST["productName"] : '';




        $checkQuantity = "SELECT Quantity FROM watche_details WHERE Pro_Id = $productId";
        $result = $conn->query($checkQuantity);

        if ($result && $result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $currentQuantity = $row['Quantity'];

            if ($currentQuantity > 0) {
                $newQuantity = $currentQuantity - 1;
                $updateQuantity = "UPDATE watche_details SET Quantity = '$newQuantity' WHERE Pro_Id = '$productId'";

                if ($conn->query($updateQuantity)) {
                    $sql = "INSERT INTO orderdetails (Username, First_Name, Last_Name, Address, Mobile, District, Product_Id, Product_Name, Price) VALUES ('$username', '$fname', '$lname', '$address', '$mnumber', '$district', '$productId', '$productName', '$price')";


                    if ($conn->query($sql)) {
?>
                        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
                        <script>
                            Swal.fire({
                                icon: 'success',
                                title: 'Your Order Confirmed Successfully!',
                                showConfirmButton: true,
                                timer: 20000,
                                allowOutsideClick: true,
                                onClose: () => {

                                    window.location.href = 'WATCHESCustomerSide.php';
                                }
                            });
                        </script>
<?php
                    } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                    }
                } else {
                    echo "Error updating quantity: " . $conn->error;
                }
            } else {
                echo "This product is out of stock";
            }
        } else {
            echo "Error checking quantity: " . $conn->error;
        }
    } else {

        echo "User not logged in!";
    }

    $conn->close();
}
?>