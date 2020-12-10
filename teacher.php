<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher client</title>
    <link rel="stylesheet" href="css/teacher.css">
    <link href="https://fonts.googleapis.com/css2?family=Grandstander:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <div id="logo">
        <img src="images/logo1.png" width="230" height="50" alt="" loading="lazy" />
    </div>

             <button class="btn btn-sm btn-outline-secondary" type="button" style="position:relative; left: 80vw; font-family: Arial Rounded MT Bold;font-size: 1vw;margin-left: 3vw;">
             <a href="login.php?action=logout" style=" text-decoration:none; color: #999999;">Logout</a>
            </button>

    <h1>Student Progress</h1>
    
    <table border = '1'>

        <tr>
            <th>ID</th>
            <th>Student Name</th>
            <th>Art</th>
            <th>Mathematics</th>
            <th>Geography</th>
            <th>Science</th>
        </tr>

        <?php
            $con = mysqli_connect('localhost','root','9598319a1a1dd160','php');
            $db_selected = mysqli_select_db('php',$con);
            mysqli_query('set names utf8');
            
            $sql = "select user_id, username, art, math, geography, science from User";
            $res = mysqli_query($con, $sql);
            
            while(!!$row = mysqli_fetch_assoc($res)){
                echo"<tr><td>".$row["user_id"]."</td><td>".$row["username"]."</td><td>".$row["art"]."</td><td>".$row["math"]."</td><td>".$row["geography"]."</td><td>".$row["science"]."</td><tr>";
            }

            mysqli_close($con);
        ?>

    </table>

    <form action="announce.php" method="get">
        Announcements to students: <input type="text" value="announce">
        <input type="submit" value="Submit" />
    </form>

</body>
</html>


    
    


