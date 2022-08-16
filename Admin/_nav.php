<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../CSS/style.css">
    <script src="../JS/script.js"></script>
    <title></title>
</head>

<body>
    <?php include_once "connection.php" ?>
    <!-- START OF NAV -->
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item dropdown "id="btnNotif">
                        <a class="nav-link dropdown-toggle" href="#"  role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            &#9993;<span class="badge text-bg-secondary" id="cntNotif">4</span>
                        </a>
                        <ul class="dropdown-menu">
                            <?php

                            $query = "SELECT * FROM tblnotify WHERE status=0";
                            $res = mysqli_query($con, $query);
                            
                            while($rec = mysqli_fetch_array($res)){
                            ?>
                            <li><a class="dropdown-item" href="#"><?php echo $rec["message"] ?></a></li>
                        
<?php } ?>
                            <!-- <li>
                                <hr class="dropdown-divider">
                            </li> -->

                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
</body>

</html>