<?php
require "phpconnection5.php";

if (isset($_POST["submit"]))   {
    $name=$_POST["name"];
    $password=$_POST["password"];
    $nationality=$_POST["nationality"];
    $gender=$_POST["gender"];
    $date_of_birth=$_POST["date_of_birth"];

    $sql = "INSERT INTO register VALUES('','$name', '$password', '$nationality', '$gender', '$date_of_birth')";
    
    mysqli_query($conn,$sql);
    echo
    "
    <script> alert ('data inserted successfully'); </script>

    ";
    { header ("location:login_page.php");}
} 

?>
<html>
    <?php include "header.php"?>

<body >
    <style>
        .card{
    width:20%;
    justify align:center;
    margin:auto;
    background: #cbb09c !important;
}
</style>
    <div class="card">
   <center> 
    <form  action="" method="post" autocomplete="off">
        <label for="" b>Name</label><br> 
        <input type = "text" name="name" id="registername" required value=""> 

        <label for="">password</label><br>
        <input type = "password" name="password"  required value=""><br>

        <lable for="">nationality</lable><br>
        <input type = "text" name="nationality" required value=""><br>
     
        <lable for ="">gender</lable>
        <input type = "text" name="gender"   required value="" >
        
        <br> 
           
        <lable for ="">date_of_birth</lable>
        <input type="date" name="date_of_birth" require><br>

        <button type="submit" name="submit">submit</button>
        <td><a href="login_page.php">click here to login </a></td>
        <center>
</div>
    <?php include "footer.php"?>
   

</html>

<!DOCTYPE html>
