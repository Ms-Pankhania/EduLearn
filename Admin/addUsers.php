<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>
<body>
   <?php
   ob_start();
    include_once "connection.php";
    include_once "nav.php";
    $str="select * from tblregister where status=0";
    $rs=mysqli_query($Cnn,$str);
    if(isset($_REQUEST["add"])){
        $strUp="update tblregister set status=1 where user_id={$_REQUEST['id']}";
        // echo $strUp;
        if($_REQUEST["id"]<1){
            $msg = urlencode('Something went wrong!');
            header("Location:addUsers.php?msg=".$msg);
        }else{
            mysqli_query($Cnn,$strUp);
            // header("location:addUsers.php") or die("Something went wrong!");
            $msg = urlencode('User Added Successfully!');
            header("Location:addUsers.php?msg=".$msg);
        }  
    }
    if(isset($_REQUEST["delete"])){
        $strUp="update tblregister set status=-1 where user_id={$_REQUEST['id']}";
        // echo $strUp;
        if($_REQUEST["id"]<1){
            $msg = urlencode('Something went wrong!');
            
        }else{
            mysqli_query($Cnn,$strUp);
            // header("location:addUsers.php") or die("Something went wrong!");
            $msg = urlencode('User Blocked!');
            
        } 
        header("Location:addUsers.php?msg=".$msg); 
    }
   ?>
   <div class="container-fluid col-sm-9 mt-5 pe-5">
    <?php
    if (isset($_GET["msg"])) {
        echo '<div class="alert alert-info ml-5 mt-2 col-sm-12">'.$_GET["msg"]."</div>";
      }
    ?>
        <h1 class="text-center ">NEW REQUESTS</h1>
        <table class="table table-hover table-responsive mt-5 ">
            <thead class="table-dark">
                <tr>
                    <td scope="col">Username</td>
                    <td scope="col">Email Id</td>
                    <td scope="col">Contact No.</td>
                    <td scope="col">Registration Date</td>
                    <td scope="col">Action</td>
                </tr>
            </thead>
            <tbody>
                <?php
                   
                    while($rec = mysqli_fetch_array($rs))
                    {
                ?>
                <tr>
                    <td><?php echo $rec["user_name"];?></td>
                    <td><?php echo $rec["email_id"];?></td>
                    <td><?php echo $rec["contact_no"];?></td>
                    <td><?php echo $rec["registration_date"];?></td>
                    <td>
                        <!-- update Button -->
                        <form action="" method="POST" class="d-inline">
                        <input type="hidden" name="id" value="<?php echo $rec["user_id"];?>">
                        <button
                            type="submit"
                            class="btn btn-success mr-3"
                            name="add"
                            value="add">
                            <i class="bi bi-plus-square-fill"></i>
                        </button>
                        </form>
                        <!-- Delete Button -->
                        <form action="" method="POST" class="d-inline">
                        <input type="hidden" name="id" value="<?php echo $rec["user_id"];?>">
                        <button
                            type="submit"
                            class="btn btn-danger"
                            name="delete"
                            value="delete">
                            <i class="bi bi-dash-square-fill"></i>
                        </button>
                        </form>
                    </td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
    </div>
</body>
</html>