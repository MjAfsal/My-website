<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css" integrity="sha384-GLhlTQ8iFZLp3Un3+U8U8YXRaL6NHT5aP8SA9bz5l1+q1Q1g2rg5A8gsyZgO8n" crossorigin="anonymous">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=MuseoModerno:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=MuseoModerno:wght@0,100;0,200;...and-so-on&display=swap" rel="stylesheet">
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
            --text-color: #fff;
            --bg-color: #08162a;
            --main-color: #f29494;
            --second-color: #2b3544;
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
            background-color: var(--second-color);
            padding: 20px;
            border-radius: 20px;
            box-shadow: 50px var(--text-color);
            width: 45%;
        }

        label {
            color: var(--text-color);
            font-size: var(--p-font);
            margin-bottom: 8px;
            /* display: block; */
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            border: 1px solid var(--orher-color);
            border-radius: 5px;
            box-sizing: border-box;
        }

        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            border: 1px solid var(--orher-color);
            border-radius: 5px;
            box-sizing: border-box;
            cursor: pointer;
        }

        button {
            background-color: var(--main-color);
            color: var(--second-color);
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: black, 10%;
        }
    </style>
</head>

<body>
    <form method="POST" action="" enctype="multipart/form-data">

        <label>Product Type:</label><br>
        <select name="product_type">
            <option value="phone_details">Phone</option>
            <option value="watche_details">Watches</option>
            <option value="accessorie_details">Accessories</option>
        </select><br><br>
        <label>Product id:</label><br>
        <input type="text" name="id"><br><br>
        <label>Product name:</label><br>
        <input type="text" name="name"><br><br>
        <label>Product Quantity:</label><br>
        <input type="text" name="quantity"><br><br>
        <label>Product price:</label><br>
        <input type="text" name="price"><br><br>
        <label>Product Image:</label><br>
        <input type="file" name="image" accept="image/*"><br><br>


        <button type="submit" name="submit">Submit</button>
    </form>
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

if (isset($_POST['submit'])) {
    $ProductType = $_POST['product_type'];
    $Id = $_POST['id'];
    $Name = $_POST['name'];
    $Price = $_POST['price'];
    $Quantity = $_POST['quantity'];

    $ProductType = mysqli_real_escape_string($conn, $ProductType);
    $Id = mysqli_real_escape_string($conn, $Id);
    $Name = mysqli_real_escape_string($conn, $Name);
    $Price = mysqli_real_escape_string($conn, $Price);
    $Quantity = mysqli_real_escape_string($conn, $Quantity);

    $targetDirectory = "uploads/";
    $targetFile = $targetDirectory . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if ($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    if ($_FILES["image"]["size"] > 50000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif"
    ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
?>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <script>
            Swal.fire({
                icon: 'error',
                title: 'sorry, this file was too large!',
                showConfirmButton: false,
                timer: 1000,
                allowOutsideClick: true,

            });
        </script>
        <?php
    } else {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
            echo "The file " . basename($_FILES["image"]["name"]) . " has been uploaded.";

            $imagePath = mysqli_real_escape_string($conn, $targetFile);
            $sql = "INSERT INTO $ProductType (Pro_Id, Pro_Name, Quantity, Price, image) 
                    VALUES ('$Id', '$Name', '$Quantity', '$Price', '$imagePath')";
            if ($conn->query($sql)) {
        ?>
                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
                <script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Product Inserted Successfully!',
                        showConfirmButton: false,
                        timer: 1000,
                        allowOutsideClick: true,

                    });
                </script>
<?php
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}

$conn->close();
?>