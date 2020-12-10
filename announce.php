<?php
    $announce = isset($_POST['announce'])?$_POST['announce']:"";

    $con = mysqli_connect('localhost','root','9598319a1a1dd160','php');
    $db_selected = mysqli_select_db('php',$con);
    mysqli_query('set names utf8');
    
    $sql_an = "UPDATE Teachers SET announce=".$announce." WHERE username='$username'";
    $res_an = mysqli_query($con, $sql_an);

    header("Location:teacher.php?err=3");
?>