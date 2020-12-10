<?php 
        $username = $_COOKIE["username"];
        $password = $_COOKIE["password"];
        ?>
<?php
$connection = mysqli_connect('localhost','root','9598319a1a1dd160');
$db = mysqli_select_db($connection,'php');
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
  }

if(isset($_POST['upload']))
{
    $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));

    $query = "UPDATE User set image='$file', flag=1  where username = '$username' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script type="text/javascript"> alert("image Profile uploaded")  </script>';
        header("Location:portfolio.php?err=1");
    }
    else{
        echo "Error: " . $query . "<br>" . mysqli_error($connection);
    }
    
}

?>
