<?php 
        $username = $_COOKIE["username"];
        $password = $_COOKIE["password"];
        if ($password != "True") {
            header("location:login.php");  
        }
        ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- CSS only -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
      integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css\home.css">

    <!-- JS, Popper.js, and jQuery -->
    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
      integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
      integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
      crossorigin="anonymous"
    ></script>
    <title>home</title>
  </head>
  <body>
    <nav
      class="navbar navbar-expand-lg navbar-light navbar-transparent font-weight-bold"
      style="margin: 0.8vw"
    >
      <a class="navbar-brand" href="home.php">
        <img src="images/logo.png" width="230" height="50" alt="" loading="lazy" />
      </a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div
        class="collapse navbar-collapse" id="navbarNavDropdown" style=" position: absolute;right: 10vw;font-family: Arial Rounded MT Bold; font-size: 1.5vw;">

      
      <ul class="navbar-nav" >
        <li class="nav-item" style="margin-left: 2vw">
          <a class="nav-link1" href="home.php"> Home <span class="sr-only"></span></a>
        </li>
        <div style="margin-left: 5vw">
          <li class="nav-item dropdown">
            <a
              class="nav-link1 dropdown-toggle"
              href="#"
              id="navbarDropdownMenuLink"
              role="button"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              Games
            </a>
            <div
              class="dropdown-menu"
              aria-labelledby="navbarDropdownMenuLink"
            >
                <a class="dropdown-item" href="math.php">Math</a>
                <a class="dropdown-item" href="geographic.php">Geographic</a>
                <a class="dropdown-item" href="art.php">Art</a>
                <a class="dropdown-item" href="science.php">Science</a>
            </div>
          </li>
        </div>

        <li class="nav-item" style="margin-left: 5vw">
          <a class="nav-link1" href="portfolio.php">Profile</a>
        </li>
        <li class="nav-item" style="margin-left: 5vw">
          <a class="nav-link1" href="about.php">About</a>
        </li>
        <form class="form-inline" style="margin-left: 5vw">
             <button class="btn btn-sm btn-outline-secondary" type="button" style="font-family: Arial Rounded MT Bold;font-size: 1vw;margin-left: 3vw;">
             <a href="login.php?action=logout" style=" text-decoration:none; color: #999999;">Logout</a>
            </button>
        </form>
      </ul>
      </div>
    </nav>

    <?php
    $con = mysqli_connect('localhost','root','9598319a1a1dd160','php');
    $db_selected = mysqli_select_db('php',$con);
    mysqli_query('set names utf8');

    $sql = "select art, math, geography, science from User where username='$username'";
    $res = mysqli_query($con, $sql);

    $width_1=0;
    $width_2=0;
    $width_3=0;
    $width_4=0;

    while(!!$course = mysqli_fetch_assoc($res)){
      switch ($course["art"]) {
        case 0:
          $width_1 = 0;
          break;
        case 1:
          $width_1 = 20;
          break;
        case 2:
          $width_1 = 40;
          break;
        case 3:
          $width_1 = 60;
          break;
        case 4:
          $width_1 = 80;
          break;
        default:
          $width_1 = 100;
          break;
      } 

      switch ($course["math"]) {
        case 0:
          $width_2 = 0;
          break;
        case 1:
          $width_2 = 20;
          break;
        case 2:
          $width_2 = 40;
          break;
        case 3:
          $width_2 = 60;
          break;
        case 4:
          $width_2 = 80;
          break;
        default:
          $width_2 = 100;
          break;
      } 

      switch ($course["geography"]) {
        case 0:
          $width_3 = 0;
          break;
        case 1:
          $width_3 = 20;
          break;
        case 2:
          $width_3 = 40;
          break;
        case 3:
          $width_3 = 60;
          break;
        case 4:
          $width_3 = 80;
          break;
        default:
          $width_3 = 100;
          break;
      } 

      switch ($course["science"]) {
        case 0:
          $width_4 = 0;
          break;
        case 1:
          $width_4 = 20;
          break;
        case 2:
          $width_4 = 40;
          break;
        case 3:
          $width_4 = 60;
          break;
        case 4:
          $width_4 = 80;
          break;
        default:
          $width_4 = 100;
          break;
      } 
    }
    ?>

    <div style="
        width: 40%;
        height: 40vw;
        position: absolute;
        right: 0%;
        margin: 5% 10% 0 0;
      "
    >
     
    <ul class="nav nav-tabs mb-3" id="pills-tab" role="tablist" style="margin-left: 4vw;">
            <li class="nav-item" role="presentation">
              <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Coures</a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Announcements</a>
            </li>
          </ul>

          <div class="tab-content container" id="myTabContent" >
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
              <div class="row">
                <div class="col"><div style="padding-left: 15px; padding-right: 15px;"><a href="art.php"><img src="images/home/h_art_u26.png" alt="" style="width: 100%;" onmouseover="this.src='images/home/h_art_u26_mouseOver.png';"
                    onmouseout="this.src='images/home/h_art_u26.png';"></a>
                    <h2 style="position: absolute; right: 13vw; top: 14vw;">Art</h2>
                    <div class="progress" style="width: 60%; position: absolute; right: 5vw; top: 17vw;">
                        <div class="progress-bar progress-bar-striped" role="progressbar" style="<?php echo "width: ".$width_1."%;" ?>" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                  </div>
                    
                <div class="col"><div style="padding-left: 15px; padding-right: 15px;"><a href="math.php"><img src="images/home/h_math_u27.png" alt="" style="width: 100%;" onmouseover="this.src='images/home/h_math_u27_mouseOver.png';"
                    onmouseout="this.src='images/home/h_math_u27.png';"></a>
                    <h2 style="position: absolute; right: 12vw; top: 14vw;">Math</h2>
                    <div class="progress" style="width: 60%; position: absolute; right: 5vw; top: 17vw;">
                        <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="<?php echo "width: ".$width_2."%;" ?>" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
                <div class="w-100"></div>
                <div class="col"><div class="col"><a href="science.php"><img src="images/home/h_science_u29.png" alt="" style="width: 100%;" onmouseover="this.src='images/home/h_science_u29_mouseOver.png';"
                    onmouseout="this.src='images/home/h_science_u29.png';"></a>
                    <h2 style="position: absolute; right: 7.5vw; top: 14vw;">Science</h2>
                    <div class="progress" style="width: 60%; position: absolute; right: 4vw; top: 17vw;">
                        <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="<?php echo "width: ".$width_4."%;" ?>" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    
                </div>
            </div>
                <div class="col"><div class="col"><a href="geographic.php"><img src="images/home/h_geogra_u28.png" alt="" style="width: 100%;" onmouseover="this.src='images/home/h_geogra_u28_mouseOver.png';"
                    onmouseout="this.src='images/home/h_geogra_u28.png';"></a>
                    <h2 style="position: absolute; right: 6vw; top: 14vw;">Geograpy</h2>
                    <div class="progress" style="width: 60%; position: absolute; right: 4vw; top: 17vw;">
                        <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="<?php echo "width: ".$width_3."%;" ?>" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    
                  </div>
                </div>
              </div>
                
                
            </div>

            <div class="tab-pane fade overflow-auto" id="profile" role="tabpanel" aria-labelledby="profile-tab" style="height: 100%; width: 100%; font-size: large; font-size: 1.5vw">
              <?php
              $sql_anno = "select username, announce from Teachers";
              $res_anno = mysqli_query($con, $sql_anno);
              while(!!$anno = mysqli_fetch_assoc($res_anno)) {
                echo "".$anno["username"].": ".$anno["announce"]."";
              }
              ?>
            </div>
        </div>      
      </div>
      <div style="margin-left: 5vw;">
          <img src="images/home/u30.jpg" alt="" style="width: 40%; position: absolute;top: 25vw;">
          <div>
              <h1 style="position: absolute; top: 11vw; font-size: 4vw; color: #6354BD; font-family: 'ArialRoundedMTBold', 'Arial Rounded MT Bold';font-weight: 400;">Hello <?php echo $username;?></h1>
              <p style=" position: absolute; top: 16vw; font-size: 2vw; width: 35vw; color: #666666;font-family: 'ArialRoundedMTBold', 'Arial Rounded MT Bold';">Let's conduct game-based learning based on school learning.</p>
          </div>
      </div>


      




    </div>
    <footer >
      <div class="main_footer" style="position: absolute; bottom: -40vw;">
        <div id="title_content">
          <a class="navbar-brand" href="#">
              <img src="images/logo1.png" width="248" height="65" alt="" loading="lazy" />
          </a>
      </div>
      <div id="text_content">
          <h4>Content</h4>
          <li><a href="">Educational content</a></li>
          <li><a href="">Educational game</a></li>

      </div>
      <div id="text_content">
          <h4>Learn</h4>
          <li><a href="math.php">Math</a></li>
          <li><a href="geographic.php">Geography</a></li>
          <li><a href="art.php">Art</a></li>
          <li><a href="science.php">Science</a></li>
      </div>
      <div id="text_content">
          <h4>Help</h4>
          <li><a href="">Team Taco Tuesday</a></li>
          <li><a href="">Technical Support</a></li>
          <li><a href="">Data Security</a></li>
      </div>

      </div>
  </footer>
  
  </body>
</html>
