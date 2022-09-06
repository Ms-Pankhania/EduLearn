<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>

<body>
    <?php
    include_once "connection.php";
    include_once "nav.php";

    $str = "select * from tblcourse";
    $rs = mysqli_query($Cnn, $str);
    $total_courses = mysqli_num_rows($rs);

    $str = "select * from tblregister";
    $rs = mysqli_query($Cnn, $str);
    $total_students = mysqli_num_rows($rs);

    $str = "select * from tblfeedback";
    $rs = mysqli_query($Cnn, $str);
    $total_feedbacks = mysqli_num_rows($rs);

    ?>
    <div class="mx-3 mt-5 col-sm-8 p-3">
        <div class="row">
            <!-- Total Courses -->
            <div class="col">
                <div class="card" style="width: 16rem;">
                    <img src="../Images/totalCourses.png" alt="" class="card-img-top">
                    <div class="card-body bg-dark text-white text-center p-4">
                        <div class="card-title">TOTAL COURSES</div>
                        <p class="card-text"><?php echo $total_courses; ?></p>
                        <a href="viewCourses.php" class="btn btn-primary">VIEW</a>

                    </div>
                </div>
            </div>


            <!-- Total Students -->
            <div class="col">
                <div class="card" style="width: 16rem;">
                    <img src="../Images/Students.png" alt="" class="card-img-top">
                    <div class="card-body bg-dark text-white text-center p-4">
                        <div class="card-title">TOTAL STUDENTS</div>
                        <p class="card-text"><?php echo $total_students; ?></p>
                        <a href="viewUsers.php" class="btn btn-primary">VIEW</a>
                    </div>
                </div>
            </div>


            <!-- Total Feedbacks -->
            <div class="col">
                <div class="card" style="width: 16rem;">
                    <img src="../Images/totalFeedbacks.jpg" alt="" class="card-img-top">
                    <div class="card-body bg-dark text-white text-center p-4">
                        <div class="card-title">TOTAL FEEDBACKS</div>
                        <p class="card-text"><?php echo $total_feedbacks; ?></p>
                        <a href="viewFeedback.php" class="btn btn-primary">VIEW</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>

</html>