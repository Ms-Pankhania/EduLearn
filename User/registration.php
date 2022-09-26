<?php ob_start();
include_once "../Admin/connection.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../CSS/style.css">
  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <script src="../JS/jquery-3.1.1.min.js"></script>
  <style>
    .btn:hover {
      font-weight: bold;
      color: #0f2d4e;
    }
  </style>
</head>

<body style="background-color:#f5b819;">
  <?php include_once "navbar.php"; ?>
  <div class="row text-center">
    <div class="col-sm-12 px-0 mt-3">
      <form method="post" class="p-5 mx-auto jumbotron" style="width:700px;background-color:#0f2d4e;color: #f5b819;">
        <h1 class="mx-auto text-center"> SIGN UP </h1>

        <div class="form-group">
          <input type="text" class="form-control" name="txtname" placeholder="Your Name" />
        </div>
        <br />
        <div class="form-group">
          <input type="text" class="form-control" name="txtemail" placeholder="Your Email" />
        </div>
        <br />
        <div class="form-group">
          <input type="text" class="form-control" name="txtpwd" placeholder="Password" />
        </div>
        <br />
        <div class="form-group">
          <input type="text" class="form-control" name="txtcpwd" placeholder="Repeat Your Password" />
        </div>
        <br />
        <center>
          <input type="submit" class="btn px-5" style="background-color:#f5b819;" value="REGISTER">
          <br />
          Have Already an Account? <a href="login.php" style="color: #f5b819;"><u>Login Here</u></a><br />
        </center>
      </form>
    </div>

  </div>





</body>

</html>