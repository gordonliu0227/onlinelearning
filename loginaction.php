<?php
    
    $username = isset($_POST['username'])?$_POST['username']:"";
    $password = isset($_POST['password'])?$_POST['password']:"";
    $identity = isset($_POST['identity'])?$_POST['identity']:"";
    $remember = isset($_POST['remember'])?$_POST['remember']:"";



    if(!empty($username)&&!empty($password)) {
 
        $conn = mysqli_connect('localhost','root','9598319a1a1dd160','php');
   
        $sql_select_1 = "SELECT username,password FROM User WHERE username = '$username' AND password = '$password'";
        $sql_select_2 = "SELECT username,password FROM Teachers WHERE username = '$username' AND password = '$password'";

        $sql_select_3 = "SELECT email FROM User WHERE username = '$username' AND password = '$password'";

      
        $ret_1 = mysqli_query($conn,$sql_select_1);
        $ret_2 = mysqli_query($conn,$sql_select_2);
        $ret_3 = mysqli_query($conn,$sql_select_3);

        $row_1 = mysqli_fetch_array($ret_1);
        $row_2 = mysqli_fetch_array($ret_2);
        $row_3 = mysqli_fetch_array($ret_3);

      
        if ($identity == "student") {
            if($username==$row_1['username']&&$password==$row_1['password']) {
    
                if($remember=="on") {
                    setcookie("wang", $username, time()+7*24*3600);
                }
                setcookie("username",$username);
                setcookie("password","True");
                setcookie("email",$row_3['email']);


                mysqli_close($conn);
                header("Location:home.php");
            } else {
                header("Location:login.php?err=1");
            }
        } elseif($identity == "teacher") {
            if($username==$row_2['username']&&$password==$row_2['password']) {
    
                if($remember=="on") {
                    setcookie("wang", $username, time()+7*24*3600);
                } 
                mysqli_close($conn);
                header("Location:teacher.php");
            } else {
                header("Location:login.php?err=1");
            }
        }
    }else {

        header("Location:login.php?err=2");
    }

    if ($_GET['action']== "logout") {
        setcookie ("username","", time() + 60*60*24*30);
        setcookie ("password","", time() + 60*60*24*30);
        echo "log out successful!";
        exit;
    }

?>