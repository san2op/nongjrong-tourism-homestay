
<?php
    $servername="localhost";
    $username="root";
    $password="";
    $db="nongjrongtourism";

    $conn = mysqli_connect("localhost","root","","nongjrongtourism");
    if ($conn){
        echo "connected succesfully";
    }
   else
   {
    die(mysqli_error($conn));
   }
    ?>
