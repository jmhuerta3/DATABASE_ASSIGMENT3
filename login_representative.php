<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login Page</title>

  <!-- Bootstrap CSS library -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  <style>
    body {
      background-color: #FF8200; /* UTEP orange background */
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .login-container {
      background-color: white;
      border: 2px solid #041E42; /* Navy border */
      border-radius: 8px;
      padding: 30px;
      width: 100%;
      max-width: 400px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .login-container h2 {
      color: #041E42; /* Navy color */
      text-align: center;
      margin-bottom: 20px;
    }

    .btn-login {
      background-color: #041E42;
      color: white;
      font-weight: bold;
      width: 100%;
      transition: background-color 0.3s ease, transform 0.2s ease;
    }

    .btn-login:hover {
      background-color: #FF8200; /* Orange on hover */
      transform: scale(1.05);
    }

    .form-group label {
      font-weight: bold;
    }

    .form-control {
      border: 1px solid #041E42; /* Navy border */
    }
  </style>
</head>

<body>
  <div class="login-container">
    <h2>Login</h2>
    <form action="login_handler.php" method="POST">
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" id="username" name="username" placeholder="Enter username" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
      </div>
      <button type="submit" class="btn btn-login">Login</button>
    </form>
  </div>

  <!-- Bootstrap JS and dependencies -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>
