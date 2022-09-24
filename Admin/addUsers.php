<?php ob_start();
include_once "connection.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../CSS/style.css">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <script src="../JS/jquery-3.1.1.min.js"></script>

</head>

<body>
  <div class="row">
    <div class="col-sm-3 px-0">
      <?php include_once "nav.php"; ?>
    </div>
    <?php


    //   //echo "ID : = ".$_REQUEST["id"];

    //   if (isset($_SESSION["UserID"])) 
    //   {
    //     $strUp = "select * from tblUser where User_id={$_SESSION["UserID"]}";
    //     $rs = mysqli_query($Cnn, $strUp);
    //     $rec = mysqli_fetch_array($rs);
    //     //Checking if the button is clicked
    //   }
    //     if (isset($_REQUEST["btn_addUser"])) 
    //     {
    //       $User_name = $_REQUEST["User_name"];
    //       
    //       if ($User_name == "" | $User_desc == "")
    //       {
    //         $msg = urlencode('All Fields Required!');
    //         die($msg);
    //       }
    //       //checking if the update id is set or not and if it is not set, let's insert 
    //       if (!isset($_SESSION["UserID"])) 
    //       {
    //         echo "Insert: ".$_REQUEST['id']; exit;
    //         $strIns = "insert into tblUser values (null,'$User_name','$User_desc','$img_folder')";
    //         mysqli_query($Cnn, $strIns);
    //         $msg = urlencode('User Added Successfully!');
    //       } 
    //       else {
    //         echo "Update".$_SESSION["UserID"]; //exit;
    //         $strUp = "update tblUser set User_name='$User_name', User_desc='$User_desc', User_img='$User_image' where User_id={$_SESSION["UserID"]}";
    //         echo mysqli_query($Cnn, $strUp);
    //         $msg = urlencode('User Updated Successfully!');
    //         header("Location:viewUsers.php?msg=".$msg);
    //       }
    //     }

    ?>
    <div class="col-sm-9 px-0">
      <?php include_once "_nav.php"; ?>
      <form method="post" enctype="multipart/form-data" class="mx-3 p-3 jumbotron bg-light">
        <div class="heading">
          <span class="text-center">
            <h1>
              <?php if (isset($_SESSION["UserID"])) {
                // echo "Update User";
              } else {
                echo "Add User";
              } ?></h1>
          </span>
        </div>
        <br />
        <div class="form-group">
          <label for="User_name">User Name :</label>
          <input type="text" class="form-control" name="User_name" value="<?php if (isset($rec)) echo $rec["user_name"]; ?>" aria-describedby="Username" placeholder="Enter Name of User">
        </div>
        <br />
        <div class="form-group">
          <label for="email">Email :</label>
          <input type="email" class="form-control" name="email" value="<?php if (isset($rec)) echo $rec["email_id"]; ?>" aria-describedby="email" placeholder="Enter Email ID of User">
        </div>
        <br />
        <div class="form-group">
          <label for="password">Password :</label>
          <input type="password" class="form-control" name="password" value="<?php if (isset($rec)) echo $rec["password"]; ?>" aria-describedby="password" placeholder="Enter Password of User">
        </div>
        <br />
        <div class="form-group">
          <label for="contact">Contact :</label>
          <input type="number" class="form-control" name="contact" value="<?php if (isset($rec)) echo $rec["contact"]; ?>" aria-describedby="contact" placeholder="Enter Contact Number of User">
        </div>
        <br />

        <div class="text-center">
          <input type="submit" class="btn btn-danger" name="btn_addUser" value='<?php if (isset($_SESSION["UserID"])) {
                                                                                  echo "UPDATE User";
                                                                                } else {
                                                                                  echo "ADD User";
                                                                                } ?>' />

        </div>
        <?php
        if (isset($_GET['msg'])) {
          echo '<div class="alert alert-info ml-5 mt-2 col-sm-12">' . $_GET['msg'] . '</div>';
        }
        ?>

      </form>
    </div>
  </div>

</body>

</html>