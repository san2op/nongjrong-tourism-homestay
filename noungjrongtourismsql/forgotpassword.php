<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <center>
        <table>
        <tr>
 <td>id</td>
 <td><input type="text" name="id" placeholder="enter your id " required></td><br>
</tr>      
 <tr>
 <td>username</td>
 <td><input type="text" name="name" placeholder="enter your user name" required></td><br>
</tr>
<tr>
 <td>new password</td>
 <td><input type="password" name="password" placeholder="enter new  password"  required></td><br>
</tr>  
<button type="submit" name="submit">submit</button><br>
        <td><a href="login_page.php">click here to login </a></td>
        
</center>
</table>
 </body>
 </html>
 <table>
               


<?php
 require "phpconnection5.php";

 if (isset($_POST['update']))
 {
    $id = $_POST['id'];
    $password = $_POST['password'];
    $name = $_POST['name'];

    If ($name == null)
    {
        echo "cannot be empty";
    }
    else{
        $sql = "UPDATE `register` SET `id` = '$id',`password`='$password', where (`name`='$name')";
        $result = mysqli_query($conn,$sql);
        if ($conn->query($sql) === TRUE)
        {
            header("Location: login_page.php");
        }else{
            echo "Record update failed";
        }
    }
    
 }
?>