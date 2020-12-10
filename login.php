
<?php 
    if ($_GET['action']== "logout") {
        setcookie ("username","", time() + 60*60*24*30);
        setcookie ("password","", time() + 60*60*24*30);
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
</head>
<body>
    <div class="login_main">
        <div class="login_func">
            <h2>User Login</h2>
            <form id="loginform" action="loginaction.php" method="post">
                <table border="0">
                    <div id="input_div">
                        <input type="text" placeholder="User Name/Student ID" style="width:32vw;height:50px;" id="name" name="username" required="required"
                        value="<?php echo isset($_COOKIE["wang"])?$_COOKIE["wang"]:"";?>">
                    </div>
                    <div id="input_div">
                        <input type="password" placeholder="Password" style="width:32vw;height:50px;" id="password" name="password">
                    </div>

                    <div id="input_div">
                        <input type="radio" id="identity" name="identity" value="student" checked="yes">Student
                        <input type="radio" id="identity" name="identity" value="teacher">Teacher
                    </div>
                    
                    <div id="input_div">
                        <div colspan="2">
                            <input type="checkbox" name="remember"><small>Remember Username
                        </div>

                        <div colspan="2" style="color:red;font-size:10px;">
                    
                            <?php
                                $err=isset($_GET["err"])?$_GET["err"]:"";
                                switch($err) {
                                    case 1:
                                    echo "username or password is wrong！";
                                    break;
                                    case 2:
                                    echo "username or password can not be empty！";
                                    break;
                                }
                            ?>  
                        </div>
                    </div>

                    <div align="left" class="div_button">
                        <button type="submit" id="login" name="login" class="b_about">Login</button>
                    </div>
                    <div align="left" class="div_button">
                        <a href="register.php" class="b_about" id="reg">Register!</a>
                    </div>                
                 </table>
            </form>
        </div>
    </div>
</body>
</html>