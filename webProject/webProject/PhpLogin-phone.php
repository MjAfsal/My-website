<?php
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "finalproject1";

$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()) {
    die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        function validate($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlentities($data);
            return $data;
        }

        $username = validate($_POST['username']);
        $password = validate($_POST['password']);

        if ($username!="") {
            header("Location: login-phone.php?error=Username is required");
            exit();
        } else if (empty($password)) {
            header("Location: login-phone.php?error=Password is required");
            exit();
        } else {
            $sql = "SELECT * FROM register WHERE username='$username' AND password1='$password'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $user_type = $row['user_type'];

                session_start();
                $_SESSION['username'] = $username;
                $_SESSION['user_type'] = $user_type;

                if ($user_type == 'Admin') {
                    header("Location: Dashboard.php");
                } else {
                    if (isset($_GET['redirect'])) {
                        $redirectUrl = $_GET['redirect'] . '?productId=' . $_GET['productId'];
                        header("Location: $redirectUrl");
                    } else {
                        header("Location: PHONES-CustomerSide.php");
                    }
                }
                exit();
            } else {
                header("Location: login-phone.php?error=Invalid username or password");
                exit();
            }
        }
    } else {
        header("Location: login-phone.php");
        exit();
    }
}
