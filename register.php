<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/register.css">
    <title>Register</title>
</head>
<body>
    <div class="title_part">
        <h1>Register</h1>
    </div>
    <div class="sub_part">
            <h2><a href="login.php" style="text-decoration: none;">Back:</a></h2>
            </div>
    <HR style="FILTER: alpha(opacity=100,finishopacity=0,style=3)" width="75%" color=grey SIZE=1.4>
    <form action="registeraction.php" method="post">
        <table border="0">
            <div class="sub_part">
                <h2>Name:</h2>
            </div>
            <div class="input_part">
                <input type="text" style="width:32vw;height:40px;background-color: white;" id="id_name" name="username" required="required">
            </div>
            <div class="sub_part">
                <h2>Email:</h2>
            </div>
            <div class="input_part">
                <input type="email" style="width:32vw;height:40px;background-color: white;" id="email" name="email">
            </div>
            <div class="sub_part">
                <h2>Password:</h2>
            </div>
            <div class="input_part">
                <input type="password" style="width:32vw;height:40px;background-color: white;" id="password" name="password" required="required">
            </div>
            <div class="sub_part">
                <h2>Confirm Password:</h2>
            </div>
            <div class="input_part">
                <input type="password" style="width:32vw;height:40px;background-color: white;" id="re_password" name="re_password" required="required">
            </div>

            <div align="left" class="div_button" >
                <button class="b_about" type="submit" id="register" name="register" >Submit</button>
            </div>
            <td colspan="2" align="center" style="color:red;font-size:10px;">
                <?php
                    $err=isset($_GET["err"])?$_GET["err"]:"";
                    switch($err) {
                        case 1:
                        echo "Username already exists!";
                        break;
                        case 2:
                        echo "The password is inconsistent with the repeated password!";
                        break;
                        case 3:
                        echo '<script language="JavaScript">;alert("Register succwssful!");location.href="login.php";</script>';
                        break;
                    }
                ?>
            </td>
        </table>
    </form>

</body>
</html>