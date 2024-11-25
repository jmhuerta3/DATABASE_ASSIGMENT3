<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>CS 4342 User Login</title>

  <!-- Bootstrap CSS library https://getbootstrap.com/ -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  <style>
    body {
      background-color: #f0f8ff; /* Light blue background */
    }

    .container {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .button-group button {
      border: 2px solid black;
      background-color: #f0f8ff;
      color: black;
      width: 200px;
      font-weight: bold;
      margin: 10px 0;
    }

    .button-group button:hover {
      background-color: #f0f8ff; /* Same as body background */
      color: black;
      cursor: pointer;
    }
  </style>
</head>

<body>
  <div class="container">
    <h1>Welcome!</h1>

    <div class="button-group">
      <button class="btn" onclick="location.href='login_opportunities.php'">
        View Opportunities
      </button>
      <button class="btn" onclick="location.href='login_organization.php'">
        Admin Login
      </button>
      <button class="btn" onclick="location.href='login_representative.php'">
        Representative Login
      </button>
    </div>
  </div>

  <!-- jQuery and JS bundle w/ Popper.js -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>
