<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    body {
      background-color: #e5e5e5;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      margin: 0;
    }

    .wrapper {
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      width: 600px;
      animation: fadeIn 0.8s ease-out;
    }

    form {
      padding: 80px;
    }

    h1 {
      color: #f29494;
      font-size: 2rem;
      margin-bottom: 20px;
    }

    .error {
      color: red;
      margin-bottom: 10px;
    }

    .input-box {
      position: relative;
      margin-bottom: 30px;
    }

    .input-box input {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      border: 3px solid #868686;
      border-radius: 6px;
      outline: none;
    }

    .input-box i {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      right: 10px;
      color: #868686;
    }

    .remember-forgot {
      display: flex;
      justify-content: space-between;
      margin-bottom: 20px;
      font-size: 1rem;
      color: #868686;
    }

    .btn {
      background-color: #f29494;
      color: #fff;
      padding: 10px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .register-link {
      text-align: center;
      font-size: 1rem;
      color: #868686;
    }

    .register-link a {
      color: #f29494;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
      }

      to {
        opacity: 1;
      }
    }
  </style>
</head>

<body>
  <div class="wrapper">
    <form action="Phplogin-watch.php" method="POST">
      <h1>Login</h1>

      <?php if (isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error']; ?> </p>
      <?php } ?>

      <div class="input-box">
        <input type="text" placeholder="Username" name="username" required>
        <i class='bx bxs-user'></i>
      </div>

      <div class="input-box">
        <input type="password" placeholder="Password" name="password" required>
        <i class='bx bxs-lock-alt'></i>
      </div>

      <div class="remember-forgot">
        <lable><input type="checkbox">Remember me</lable>
        <a href="#">Forgot password</a>

      </div>
      <button type="submit" class="btn" name="submit">Login</button>

      <div class="register-link">
        <p>Don't have an account?<a href="register.php">Register</a> </p>

      </div>
    </form>
  </div>
</body>

</html>