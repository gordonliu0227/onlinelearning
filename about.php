<?php 
$username = $_COOKIE["username"];
$password = $_COOKIE["password"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- JS, Popper.js, and jQuery -->
        <script
        src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
        <script
        src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
        <script
        src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous" ></script>
    <title>About</title>
    <!-- CSS only -->
    <link
        rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
        crossorigin="anonymous"/>
    <link rel="stylesheet" href="css/aboutpage.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light navbar-transparent font-weight-bold" style="margin: 0.8vw;">
        <a class="navbar-brand" href="#">
        <img src="images/logo1.png" width="248" height="65" alt="" loading="lazy" />
        </a>
        <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown"
        aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div
        class="collapse navbar-collapse"
        id="navbarNavDropdown"
        style="
            position: absolute;
            right: 10vw;
            font-family: Arial Rounded MT Bold;
            font-size: 1.5vw;">
            
            <ul class="navbar-nav">
                <li class="nav-item" style="margin-left: 2vw">
                    <a class="nav-link1" href="home.php">Home <span class="sr-only">(current)</span></a>
                </li>
            <div style="margin-left: 3vw">
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

            <li class="nav-item" style="margin-left: 3vw">
                <a class="nav-link1" href="portfolio.php">Profile</a>
            </li>
            <li class="nav-item" style="margin-left: 3vw">
                <a class="nav-link1" href="about.php">About</a>
            </li>
            <form class="form-inline">
            <button class="btn btn-sm btn-outline-secondary" type="button" style="font-family: Arial Rounded MT Bold;font-size: 1vw;margin-left: 3vw;">
            <a href="login.php?action=logout" style=" text-decoration:none; color: #999999;">Logout</a>
            </button>
            </form>
            </ul>
        </div>
    </nav>

    <main style="margin-top: 30px;">

        <div id="main_div">
            <div>
              <p>
              6 students in this development team divided into 3 groups: the design group, the front-end construction and the back-end group. 
              Throughout the cooperation process, we also used many methods of cooperation, such as six-hat thinking, brainstorming and weekly meetings. 
              At the beginning, we made changes to the target users due to the original proposal.
              </p><br>
              <p>Yi Lu | Yan Zhang | Bowen Zhang | Jiaming Liu | Zeyi Lin | Wenbin Wei</p>
            </div>
        </div>
        
        <h2>
            CONTECT WITH US
        </h2>
        <span></span>
        
        <div align="center" class="div_button" >
            <button class="b_about">SENT EMAIL TO US!</button>
        </div>

        <h2>
            CONTECT WITH SCHOOL
        </h2>
        <span></span>

        <div align="center" class="div_button" style="margin-bottom: 80px;">
            <button class="b_about">SENT EMAIL TO SCHOOL!</button>
        </div>
    </main>

    <footer>
        <div class="main_footer">
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