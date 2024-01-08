<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>

<body>

</body>

</html>

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

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $productId = $_GET['id'];


    $query = "DELETE FROM phone_details WHERE Pro_Id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $productId);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
?>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Deleted',
                showConfirmButton: false,
                timer: 1000,
                allowOutsideClick: true,
                onClose: () => {

                    window.location.href = 'Admin-PHONE DETAILS.php';
                }
            });
        </script>
<?php
    } else {
        echo "Error deleting record: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Invalid request.";
}
?>