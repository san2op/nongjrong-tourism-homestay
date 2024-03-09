<?php 


require "phpconnection5.php";

if (isset($_POST["submit"]))   {
    $admin_id=$_POST["admin_id"];
    $email=$_POST["email"];
    $password=$_POST["password"];
  
  

    $sql = "INSERT INTO adminregister VALUES('$admin_id','$email', '$password')";
    
    mysqli_query($conn,$sql);
    echo
    "
    <script> alert ('data inserted successfully'); </script>

    ";
    {  header ("location:admin_loin.php");}
} 




?>





<html>
<?php include "header.php";?>
<?php  include "gobacktodashboard.php";?>
<div class="card" style="width: 18rem;">
    <title>register</title>

<style media="screen">
    label{
        display : block;
    }
</style>
<body>
<style>
        .card{
    width:20%;
    justify align:center;
    margin:auto;
    background: #cbb09c !important;
}
</style>
   <center>
     <form class="" action="" method="post" autocomplete="off">
        <label for="">email</label><br> 
        <input type = "text" name="email"  required value=""> <br>  
        <label for="">password</label><br>
        <input type = "password" name="password"  required value=""><br>
        <label for="">admin_id</label><br>  
        <input type = "text" name="admin_id"  required value=""><br>
      <tr>
        <button type="submit" name="submit">submit</button><br> </tr>  

        <center>
</div>
<?php include "footer.php";?>
</html>