

<?php 
include "phpconnection5.php";

if (isset($_POST['login']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];
    
    $sql="SELECT * FROM adminregister  WHERE(email ='$email' and password ='$password')";

    $result=$conn->query($sql);

    if($result){
        if ($result->num_rows> 0) {
            
           $fetchUserData = $result->fetch_assoc(); 
           print_r($fetchUserData);
        }else{
            echo "No record found";
        }
      }else{
        echo "Error in ".$query."<br>".$db->error;
      }
  

    if($result->num_rows> 0){
        header ("location:admin_dashboard.php");
    }
    else{
        echo"sorry your credentials are not valid , please try again.";

    }
}


?>

<html>
<?php include "header.php";?>
<?php  include "gobacktodashboard.php";?>
<body >
    <style>
        .card{
    width:20%;
    justify align:center;
    margin:auto;
    background: #cbb09c !important;
}
</style>
<img src=" " width="100%" height="" >
<div class="card" ;>

<h4>admin login</h4>
   
    <form method="post">
                
                    <td>email address</td>
                    <td><input type="text" name="email" placeholder="enter your email" required></td>
              
             
                    <td>password</td>
                    <td><input type="password" name="password" placeholder="enter your  password"  required></td>
              
             
                    <td><input type="submit" name="login" value="login"></td>
                    <td><input type="reset" value="reset"></td>
             
             
                    <td><a href="forgotpassword.php">Forgot Password</a></td>
           
              
        <td><a href=adminregister.php><input type="button" value="click here to register"></a></td>


</div>
</center>
</form> 
</body>

<?php include "footer.php";?>
</html>