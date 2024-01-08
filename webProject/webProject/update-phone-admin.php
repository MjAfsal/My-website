<?php
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "finalproject1";

$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()) {
    die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $productId = $_GET['id'];


    $query = "SELECT * FROM phone_details WHERE Pro_Id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $productId);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

?>
        <!DOCTYPE html>
        <html>

        <head>
            <title>Edit Product</title>
            <style>
                body {
                    font-family: Arial, sans-serif;
                    background-color: #f4f4f4;
                    margin: 0;
                    padding: 0;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    height: 100vh;
                }

                form {
                    background-color: #fff;
                    padding: 20px;
                    border-radius: 8px;
                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                }

                h2 {
                    text-align: center;
                    color: #333;
                }

                label {
                    display: block;
                    margin-bottom: 8px;
                    color: #333;
                }

                input {
                    width: 100%;
                    padding: 8px;
                    margin-bottom: 16px;
                    box-sizing: border-box;
                    border: 1px solid #ccc;
                    border-radius: 4px;
                }

                input[type="submit"] {
                    background-color: #4caf50;
                    color: #fff;
                    cursor: pointer;
                }

                input[type="submit"]:hover {
                    background-color: #45a049;
                }

                a {
                    color: #3498db;
                    text-decoration: none;
                }

                a:hover {
                    text-decoration: underline;
                }
            </style>
        </head>

        <body>

            <form action="update-phone-admin.php" method="post">
                <input type="hidden" name="Pro_Id" value="<?php echo $row['Pro_Id']; ?>">
                <label for="Pro_Name">Product Name:</label>
                <input type="text" name="Pro_Name" value="<?php echo $row['Pro_Name']; ?>">
                <label for="Price">Price:</label>
                <input type="text" name="Price" value="<?php echo $row['Price']; ?>">
                <label for="Quantity">Quantity:</label>
                <input type="text" name="Quantity" value="<?php echo $row['Quantity']; ?>">
                <input type="submit" value="Update">
            </form>
        </body>

        </html>
<?php
    } else {
        echo "Record not found.";
    }

    $stmt->close();
    $result->close();
    $conn->close();
} elseif ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['Pro_Id'])) {

    $productId = $_POST['Pro_Id'];
    $productName = $_POST['Pro_Name'];
    $price = $_POST['Price'];
    $quantity = $_POST['Quantity'];


    $query = "UPDATE phone_details SET Pro_Name=?, Price=?, Quantity=? WHERE Pro_Id=?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("sidi", $productName, $price, $quantity, $productId);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo "Record updated successfully.";
    } else {
        echo "Error updating record: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Invalid request.";
}
?>