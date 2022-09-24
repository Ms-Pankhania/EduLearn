<?php ob_start();
include_once "../Admin/connection.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EduLearn</title>
  <link rel="stylesheet" href="../CSS/style.css">
  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <script src="../JS/jquery-3.1.1.min.js"></script>
</head>

<body>
  <?php include_once "navbar.php";
  $course_id = $_GET['course_id'];
  $str = "select * from tbltopic where course_id=$course_id";
  $rs = mysqli_query($Cnn, $str);
  ?>
  <div class="container-fluid">
    <h1 class="mx-auto mt-4 p-5 "> Lessons </h1>
    <div class="row">
        <?php
        while ($rec = mysqli_fetch_array($rs)) {
          $url = $rec['topic_url'];
        ?>
          <p>
            <a class="btn btn-primary d-block" data-toggle="collapse" href="#t<?php echo $rec['topic_id']; ?>" role="button" aria-expanded="false">
              <?php echo $rec['topic_name'] ?>
            </a>
          </p>
          <div class="collapse" id="t<?php echo $rec['topic_id']; ?>">
            <div class="card card-body">
              <iframe width="560" height="315" src="<?php echo str_replace("watch?v=", "embed/", $url); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
          </div>
        <?php } ?>
 
    </div>
  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</html>