
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
 <?php
include "connection.php";
if(!isset($_SESSION['admin_id']))
{
  header("Location:login.php");
}
if (isset($_POST['request'])) {
    $req = $_POST['request'];
    $str = "select * from tbltopic where course_id=" . $req;
    $res = mysqli_query($Cnn, $str);
    $count = mysqli_num_rows($res);
}
?>
<table class="table table-hover table-responsive caption-top">
    <?php if ($count) {
    ?>
        <caption class="text-center">
            <h3>table name</h3>
        </caption>
        <thead class="table-dark">
            <tr>
                <td scope="col">Topic_name</td>
                <td scope="col">Topic_desc</td>
                <td scope="col">Topic_url</td>
                <td scope="col">Action</td>
            </tr>
        <?php
    } else {
        echo "<h1 class='mt-2'>Sorry No record found</h1>";
    }
        ?>
        </thead>
        <tbody>
            <?php
            while ($row = mysqli_fetch_assoc($res)) {
            ?>
                <tr>
                    <td><?php echo $row['topic_name'] ?></td>
                    <td><?php echo $row['topic_desc'] ?></td>
                    <td><?php echo $row['topic_url'] ?></td>
                    <td>
                        <!-- update Button -->
                        <a href="?CourseID=<?php echo $rec["course_id"]; ?>" class="btn btn-success mr-3" name="view" value="view">
                            <i class="bi bi-pencil-square"></i>
                        </a>

                        <!-- Delete Button -->
                        <a href="?DelID=<?php echo $rec["course_id"]; ?>" class="btn btn-danger mr-3" name="delete" value="delete">
                            <i class="bi bi-trash-fill"></i>
                        </a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
</table>
<?php

?>