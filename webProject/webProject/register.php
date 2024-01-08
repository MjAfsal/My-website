<!DOCTYPE html>

<head>
    <title>Register Form Design</title>
    <style>
        body {
            background-color: #e5e5e5;
            font-family: 'Arial', sans-serif;
        }

        .box {
            width: 500px;
            padding: 50px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: #fff;
            text-align: center;
            border-radius: 12px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        .box img {
            width: 80px;
            height: 80px;
            border-radius: 70%;
            margin-top: -40px;
        }

        h1 {
            margin: 10px 0;
            color: #333;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        p {
            text-align: left;
            margin-top: 10px;
            color: #333;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #f29494;
            color: #fff;
            cursor: pointer;
        }

        a {
            text-decoration: none;
            color: #f29494;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>

<body>

    <div class="box">
        <img src="RegisterUser.png" class="user">

        <h1>Register Here</h1>

        <form method="POST">


            <p>Username</p>
            <input type="text" name="username" placeholder="Enter Username" required="">

            <p>Email</p>
            <input type="Email" name="email" placeholder="Enter email id" required="">

            <p>Password</p>
            <input type="password" name="password1" placeholder="Enter Password" required="">

            <p>Retype Password</p>
            <input type="password" name="password2" placeholder="Re-Enter Password" required="">

            <input type="submit" name="submit" value="Register">

            <br><br>
            <a href="login.php">existing user, login !?</a>
        </form>

    </div>

</body>
</head>

</html>


<?php

if (isset($_POST['submit'])) {
    $Username = $_POST['username'];
    $Email  = $_POST['email'];
    $Password1 = $_POST['password1'];
    $Password2 = $_POST['password2'];

    if (!empty($Username) || !empty($Email) || !empty($Password1) || !empty($Password2)) {
        $host = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "finalproject1";

        $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

        if (mysqli_connect_error()) {
            die('Connect Error (' . mysqli_connect_errno() . ') '
                . mysqli_connect_error());
        } else {
            $SELECT = "SELECT email From register Where email = ? Limit 1";
            $INSERT = "INSERT Into register (username , email ,password1, password2) values(?,?,?,?)";

            $stmt = $conn->prepare($SELECT);
            $stmt->bind_param("s", $Email);
            $stmt->execute();
            $stmt->bind_result($Email);
            $stmt->store_result();
            $rnum = $stmt->num_rows;

            if ($rnum == 0) {
                $stmt->close();
                $stmt = $conn->prepare($INSERT);
                $stmt->bind_param("ssss", $Username, $Email, $Password1, $Password2);
                $stmt->execute();
                echo "New record inserted successfully";
            } else {
                echo "Someone already registered using this email";
            }
            $stmt->close();
            $conn->close();
        }
    } else {
        echo "All fields are required";
    }
}
?>