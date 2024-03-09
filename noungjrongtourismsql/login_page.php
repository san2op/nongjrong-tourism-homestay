<?php 
include "phpconnection5.php";

if (isset($_POST['login']))
{
    $name=$_POST['name'];
    $password=$_POST['password'];
    
    $sql="SELECT * FROM register  WHERE(name ='$name' and password ='$password')";

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
  

    if($result->num_rows > 0){
        header ("location:dashboard.php");
    }
    else{
        echo"sorry your credentials are not valid , please try again.";

   }
}

?>

<html>
<?php include "header.php";?>
<body>
    <style>
        .card {
        
     width:20%;
    justify align:center;
    margin:auto;
    background: #cbb09c !important;
        }
    </style>
    
   <!-- <img src=" " width="100%" height="40%" > -->
    <h3><center>Login</center></h3>
  
    <form  method="post" class="card">
   
             
                    <td>name</td>
                    <td><input type="text" name="name" placeholder="enter your user name" required></td>
                </tr>
                <tr>
                    <td>password</td>
                    <td><input type="password" name="password" placeholder="enter your  password"  required></td>
                </tr>  
                <tr>
                    <td><input type="submit" name="login" value="login"></td>
                    <td><input type="reset" value="reset"></td>
                </tr>
                <tr>
                    <td><a href="forgotpassword.php">Forgot Password</a></td>
                </tr>
</form>
</div>

<?php include "footer.php";?>
</html>

