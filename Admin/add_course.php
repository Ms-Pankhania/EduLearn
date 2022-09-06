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
  if (isset($_REQUEST["btn_addCourse"])) {
    // echo "HIII";

    $course_name = $_REQUEST["course_name"];
    $course_desc = $_REQUEST["course_desc"];
    $course_image = $_FILES["course_image"]["name"];
    $course_temp_name = $_FILES["course_image"]["tmp_name"];
    $img_folder = "courseImages/" . $course_image;
    move_uploaded_file($course_temp_name, $img_folder);

    if ($course_name == "" | $course_desc == "" | $course_image == "") {
      $msg = '<div class="alert alert-warning ml-5 mt-2 col-sm-12">All Fields Required!</div>';
    } else {
      $strIns = "insert into tblcourse values (null,'$course_name','$course_desc','$img_folder')";
      mysqli_query($Cnn, $strIns);
      $msg = '<div class="alert alert-success ml-5 mt-2 col-sm-12">Course Added Successfully!</div>';
    }
  }

  ?>
  <form method="POST" enctype="multipart/form-data" class="mx-3 mt-5 col-sm-8 p-3 jumbotron bg-light responsive">
    <?php
    if (isset($msg)) {
      echo $msg;
    }
    ?>
    <div class="heading">
      <span class="text-center">
        <h1>Add Course</h1>
      </span>
    </div>
    <br />
    <div class="form-group">
      <label for="course_name">Course Name :</label>
      <input type="text" class="form-control" name="course_name" aria-describedby="coursename" placeholder="Enter Name of Course">
    </div>
    <br />
    <div class="form-group">
      <label for="course_desc">Course Description :</label>
      <textarea class="form-control" name="course_desc" rows="3" placeholder="Enter Course Description"></textarea>
    </div>
    <br />
    <div class="form-group">
      <label for="course_image">Course Image :</label>
      <input type="file" class="form-control" name="course_image" placeholder="Enter Image for Course">
    </div>
    <br />
    <div class="text-center">
      <input type="submit" class="btn btn-danger" name="btn_addCourse" value="ADD COURSE" />

    </div>

    </div>
  </form>
</body>

</html>