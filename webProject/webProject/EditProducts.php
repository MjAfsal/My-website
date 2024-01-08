<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit products</title>
  <!-- BoxIcons Link -->
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

  <!-- Google Fonts -->
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
      color: var(--text-color);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    button {
      display: block;
      margin: 10px;
      padding: 80px 20px;
      background-color: var(--main-color);
      color: var(--text-color);
      border: none;
      border-radius: 20px;
      font-size: 4rem;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    button a {
      color: var(--text-color);
      text-decoration: none;
    }

    button:hover {
      background-color: var(--second-color);
    }
  </style>
</head>

<body>
  <button><a href="Admin-PHONE DETAILS.php">EDIT PHONES</a></button>
  <button><a href="Admin-WATCHE DETAILS.php">EDIT WATCHES</a></button>
  <button><a href="Admin-ACCESSORIES DETAILS.php">EDIT ACCESSORIES</a></button>
</body>

</html>