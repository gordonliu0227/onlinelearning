<?php 
        $username = $_COOKIE["username"];
        $password = $_COOKIE["password"];
        ?>

<?php 
    if ($_GET['action']== "increase") {
        $connection = mysqli_connect('localhost','root','9598319a1a1dd160');
        $db = mysqli_select_db($connection,'php');
       
        $query = "UPDATE User set geography=geography+1 where username = '$username' ";
        $query_run = mysqli_query($connection, $query);          

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
      <link rel="stylesheet" href="css/game-level.css">

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
      <style></style>
      <title>Game level</title>
  </head>

  <body>
    <div id="navigation">
      <nav
        class="navbar navbar-expand-lg navbar-light navbar-transparent font-weight-bold"
        
      >
          <a class="navbar-brand" href="#">
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
            class="collapse navbar-collapse"
            id="navbarNavDropdown"
            style="
              position: absolute;
              right: 10vw;
              font-family: Arial Rounded MT Bold;
              font-size: 1.5vw;
            "
          >
              <ul class="navbar-nav" >

                  <li class="nav-item" style="margin-left: 2vw">
                      <a class="nav-link1" href="home.php"
                        >Home <span class="sr-only"></span></a
                      >
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
                            <a class="dropdown-item" href="art.php">Art</a>
                            <a class="dropdown-item" href="science.php">Science</a>
                            <a class="dropdown-item" href="geographic.php">Geographic</a>
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
                      <button
                        class="btn btn-sm btn-outline-secondary"
                        type="button"
                        style="
                          font-family: Arial Rounded MT Bold;
                          font-size: 1vw;
                          margin-left: 3vw;
                        "
                      >
                      <a href="login.php?action=logout">Logout</a>
                      </button>
                  </form>

              </ul>

          </div>

      </nav>

      <div class="head-content">
        <h1>Choose the select game level where you start<br> learning today.</h1>
      </div>

    </div>



    <main>
      

      <div class="Content-main" id="Art-mission">
      <form class="Game-intro" id="game-1" action="select_geo-q1.html">
                <input type="image" src="images/LEVEL2-1-12.png" style="width: 18vw; height: 18vw;"> 
          </form>

          <form class="Game-intro" id="game-2" action="select_geo-q2.html">
            <input type="image" src="images/LEVEL2-2-12.png" style="width: 18vw; height: 18vw;"> 
          </form>

          
          <form class="Game-intro" id="game-3" action="select_geo-q3.html">
              <input type="image" src="images/LEVEL2-3-12.png" style="width: 18vw; height: 18vw;"> 
          </form>
  
      </div>
    </main>  





  </body>

  

</html>
