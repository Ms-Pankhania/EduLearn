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
    
</head>

<body>
    <?php include_once "navbar.php";
    
    ?>
    <div class="container-fluid">
        <h1 class="mx-auto mt-2 p-2 ">Courses</h1>
        <div class="row">

        <?php
        $str = "select * from tblcourse limit 3";
        $rs = mysqli_query($Cnn, $str);
        while ($rec = mysqli_fetch_array($rs)) {
            $course_id = $rec['course_id'];
        ?>
        
            <div class="col-sm-4 mt-2 p-2">
            <a href="topics.php" style="text-decoration: none;color: black;">
                <div class="card">
                    <img class="card-img-top" src="<?php echo '../Admin/'.$rec['course_img'] ?>">
                    <div class="card-body">
                        <h4 class="card-title" ><?php echo $rec['course_name'] ?></h4>
                        <p class="card-text" ><?php echo $rec['course_desc'] ?></p>
                        <a href="topics.php?course_id=<?= $course_id ?>" class="btn btn-primary">Enroll</a>
                    </div>
                </div>
                </a>
            </div>
        
            
        <?php } ?>
        </div>
</body>

</html>