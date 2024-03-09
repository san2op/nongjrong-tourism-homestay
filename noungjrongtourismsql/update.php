

<?php
 require "phpconnection5.php";

 if (isset($_POST['update']))
 {
    $userid = $_POST['userid'];
    $name = $_POST['name'];
    $password = $_POST['password'];
    $nationality = $_POST['nationality'];
    $gender = $_POST['gender'];
    $date_of_birth = $_POST['date_of_birth'];
  

    If ($name == null)
    {
        echo "cannot be empty";
    }
    else{
        $sql = "UPDATE register SET name ='$name', password='$password',nationality='$nationality',gender='$gender',date_of_birth=' $date_of_birth' where (`name`='$name')";
        $result = mysqli_query($conn,$sql);
        if ($conn->query($sql) === TRUE)
        { echo "update succesfully";
            header("Location: login_page.php");
        }else{
            echo "Record update failed";
        }
    }
    
 }
?>
<?php
// check GET request id param
if(isset($_GET['userid'])){

	// escape sql chars
	$customer = mysqli_real_escape_string($conn, $_GET['userid']);

	// make sql
	$sql = "SELECT * FROM register WHERE userid='$userid'";

	// get the query result
	$result = mysqli_query($conn, $sql);
   
	// fetch result in array format
	$customer = mysqli_fetch_assoc($result);

	mysqli_free_result($result);
mysqli_close($conn);
}


?>



<html>
    <title>Document</title>
 </head>
 <body>
    <center>
       
    <form  action="" method="post" autocomplete="off">
        <label for="" b>Name</label><br> 
        <input type = "text" name="name" id="registername" required value=""> 

        <label for="">password</label><br>
        <input type = "password" name="password"  required value=""><br>

        <lable for="">nationality</lable><br>
        <input type = "text" name="nationality" required value=""><br>
     
        <lable for ="">gender</lable>
        <input type = "radio" name="gender" value="male"  required value="" >male
        <input type = "radio" name="gender" value="female"  required>female 
        <br> 
           
        <lable for ="">date_of_birth</lable>
        <input type="date" name="date_of_birth" require><br>

        <button type="submit" name="submit">submit</button>
       


        <td><a href="login_page.php">click here to login </a></td>
        
</center>
</table>
 </body>
 </html>
 <table>
               




