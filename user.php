<!DOCTYPE html>
<!-- Coding by CodingNepal || www.codingnepalweb.com -->
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Boxicons CSS -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <title>Side Navigation Bar in HTML CSS JavaScript</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar">
      <div class="logo_item">
        <i class="bx bx-menu" id="sidebarOpen"></i>
        <img src="logo.jpg" alt=""></i>USER
      </div>

      <div class="navbar_content">
        <i class="bi bi-grid"></i>
        <i class='bx bx-sun' id="darkLight"></i>
        <i class='bx bx-bell' ></i>
        <img src="porfile.jpg" alt="" class="profile" />
      </div>
    </nav>

    <!-- sidebar -->
    <nav class="sidebar">
      <div class="menu_content">
        <ul class="menu_items">
          <div class="menu_title menu_dahsboard"></div>
          <!-- duplicate or remove this li tag if you want to add or remove navlink with submenu -->
          <!-- start -->
          <li class="item">
            <div href="#" class="nav_link submenu_item">
              <span class="navlink_icon">
               
              </span>
              <span class="navlink">MODULE</span>
              <i class="bx bx-chevron-right arrow-left"></i>
            </div>
                <br>
                
            <ul class="menu_items submenu">
              <a href="register.php" class="nav_link sublink">Sub Module 1</a>
              <a href="#" class="nav_link sublink">Sub Module 2</a>
              <a href="#" class="nav_link sublink">Sub Module 3</a>
              <a href="#" class="nav_link sublink">Sub Module 4</a>
            </ul>
          </li>

          <li class="item">
            <div href="#" class="nav_link submenu_item">
              <span class="navlink_icon">
               
              </span>
              <span class="navlink">MODULE</span>
              <i class="bx bx-chevron-right arrow-left"></i>
            </div>
                <br>
                
            <ul class="menu_items submenu">
              <a href="#" class="nav_link sublink">Sub Module 1</a>
              <a href="#" class="nav_link sublink">Sub Module 2</a>
              <a href="#" class="nav_link sublink">Sub Module 3</a>
              <a href="#" class="nav_link sublink">Sub Module 4</a>
            </ul>
          </li>
          <li class="item">
            <div href="#" class="nav_link submenu_item">
              <span class="navlink_icon">
               
              </span>
              <span class="navlink">MODULE</span>
              <i class="bx bx-chevron-right arrow-left"></i>
            </div>
                <br>
                
            <ul class="menu_items submenu">
              <a href="#" class="nav_link sublink">Sub Module 1</a>
              <a href="#" class="nav_link sublink">Sub Module 2</a>
              <a href="#" class="nav_link sublink">Sub Module 3</a>
              <a href="#" class="nav_link sublink">Sub Module 4</a>
            </ul>
          </li>

          <li class="item">
            <div href="#" class="nav_link submenu_item">
              <span class="navlink_icon">
               
              </span>
              <span class="navlink">MODULE</span>
              <i class="bx bx-chevron-right arrow-left"></i>
            </div>
                <br>
                
            <ul class="menu_items submenu">
              <a href="#" class="nav_link sublink">Sub Module 1</a>
              <a href="#" class="nav_link sublink">Sub Module 2</a>
              <a href="#" class="nav_link sublink">Sub Module 3</a>
              <a href="#" class="nav_link sublink">Sub Module 4</a>
            </ul>
          </li>
          <!-- end -->

          <!-- duplicate this li tag if you want to add or remove  navlink with submenu -->
          <!-- start -->
          <li class="item">
            <div href="#" class="nav_link submenu_item">
              <span class="navlink_icon">
             
              </span>
              <span class="navlink">MODULE</span>
              <i class="bx bx-chevron-right arrow-left"></i>
            </div>

            <ul class="menu_items submenu">
              <a href="#" class="nav_link sublink">Sub Module 1</a>
              <a href="#" class="nav_link sublink">Sub Module 2</a>
              <a href="#" class="nav_link sublink">Sub Module 3</a>
              <a href="#" class="nav_link sublink">Sub Module 4</a>
            </ul>
          </li>
          <!-- end -->
        </ul>


        <!-- Sidebar Open / Close -->
        <div class="bottom_content">
          <div class="bottom expand_sidebar">
            <span> Expand</span>
            <i class='bx bx-log-in' ></i>
          </div>
          <div class="bottom collapse_sidebar">
            <span> Collapse</span>
            <i class='bx bx-log-out'></i>
          </div>
        </div>
      </div>
    </nav>
    <!-- JavaScript -->
    <script src="script.js"></script>
  </body>
</html>