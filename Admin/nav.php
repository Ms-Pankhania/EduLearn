<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Drop Down Sidebar Menu | CodingLab </title>-->
    <!-- <link rel="stylesheet" href="../bootstrap-4.6.0-dist/css/bootstrap.min.css"> -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/bootstrap.min.css">
    <script src="../js/bootstrap.min.js"></script>
    </head>
<body>
  <div class="sidebar close">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">Edu Learn</span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="#">
          <i class='bx bx-grid-alt' ></i>
          <span class="link_name">Dashboard</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Dashboard</a></li>
        </ul>
      </li>
      <li>
          <a href="#">
            <i class='bx bx-user'></i>
            <span class="link_name">Users</span>
          </a>
          <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Users</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-photo-album'></i>
            <span class="link_name">Courses</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Courses</a></li>
          <li><a href="#">Add</a></li>
          <li><a href="#">View</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-book-reader'></i>
            <span class="link_name">Topics</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Topics</a></li>
          <li><a href="#">Add</a></li>
          <li><a href="#">View</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
        <i class='bx bx-message-rounded-detail'></i>
          <span class="link_name">Feedback</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Feedback</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
            <i class='bx bxs-key'></i>
          <span class="link_name">Change Password</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Change Password</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
        <i class='bx bx-log-out' ></i>
        <span class="link_name">Log out</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Log out</a></li>
        </ul>
      </li>
      <li>
  </li>
</ul>
  </div>
  <section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu' ></i>  
    </div>
  </section>
  <script>
  let arrow = document.querySelectorAll(".arrow");
  for (var i = 0; i < arrow.length; i++) {
    arrow[i].addEventListener("click", (e)=>{
   let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
   arrowParent.classList.toggle("showMenu");
    });
  }
  let sidebar = document.querySelector(".sidebar");
  let sidebarBtn = document.querySelector(".bx-menu");
  console.log(sidebarBtn);
  sidebarBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("close");
  });
  </script>
</body>
</html>
