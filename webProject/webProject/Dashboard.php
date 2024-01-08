<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>

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
      --text-color: #000000;
      --bg-color: #08162a;
      --main-color: #f29494;
      --second-color: #fff;
      --other-color: #868686;
      --big-font: 5.5rem;
      --p-font: 1rem;
    }

    body {
      font-family: 'MuseoModerno', sans-serif;
      margin: 0;
      padding: 0;
      background-color: var(--bg-color);
      color: var(--text-color);
    }

    header {
      background-color: var(--main-color);
      color: var(--second-color);
      padding: 10px;
      text-align: center;
    }

    nav {
      background-color: var(--main-color);
      overflow: hidden;
    }

    nav a {
      float: left;
      display: block;
      color: var(--second-color);
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      transition: background-color 0.3s;
    }

    .Somthing {
      color: var(--second-color);
      padding: 14px 16px;
      text-decoration: none;
      transition: background-color 0.3s;
      font-size: 30px;
      margin: 30px;
      margin-bottom: 70px;
    }

    .Somthing:hover {
      background-color: var(--other-color);
    }

    nav a:hover {
      background-color: var(--other-color);
    }

    section {
      padding: 20px;
    }

    footer {
      background-color: var(--main-color);
      color: var(--second-color);
      text-align: center;
      padding: 10px;
      position: fixed;
      bottom: 0;
      width: 100%;
    }
  </style>
</head>

<body>

  <header>
    <h1>Admin Dashboard</h1>
  </header>

  <nav>

  </nav>

  <section>
    <a href="productInsert.php" class="Somthing">Insert Products</a><br><br>
    <a href="EditProducts.php" class="Somthing">Edit Products</a><br><br>
    <a href="showRegisterDetails.php" class="Somthing">Register Customer Details</a><br><br>
    <a href="orderdetails.php" class="Somthing">Order Details</a><br><br>
  </section>

  <footer>
    <p>&copy; MICRO DIGIT</p>
  </footer>

</body>

</html>