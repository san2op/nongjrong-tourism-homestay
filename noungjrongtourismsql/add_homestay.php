
<?php 

include "phpconnection5.php";

if (isset($_POST["submit"]))   {
    $homenumber=$_POST["homenumber"];
    $facilities=$_POST["facilities"];
    $owner_contact=$_POST["owner_contact"];
    $reservation_number=$_POST["reservation_number"];
    $cottage_name=$_POST["cottage_name"];
    $status=$_POST["status"];
    

    $sql = "INSERT INTO homestay VALUES('$homenumber','$facilities', '$owner_contact', '$reservation_number','$cottage_name','$status')";
    
    mysqli_query($conn,$sql);
    echo
    "
    <script> alert ('data inserted successfully'); </script>

    ";
    {  header ("location:displayhomestay.php");}
} 

?>


<!DOCTYPE html>

<html>
    

<body>
    <style>
        form{
            max-width:460px;
            margin : 20px auto;
            padding: 20px;
        }
    </style>
</body>

    <?php include "header.php";?>
    
  <?php  include "gobacktodashboard.php";?>

  <?php  include "gobacktomanagerdashboard.php";?>
 
<section class="container grey-text">
    <h4 class="center">Add home Stay</h4>
    

<form class="white" action="" method="post">
    <label>homenumber</label>
    <input type="text" name="homenumber" id="homenumber" class="validate" required>

    <label>facilities(comma separated)</label>
    <input type="text" name="facilities" id="facilities" class="validate" required>

    <label>owner_contact</label>
    <input type="text" name="owner_contact" id="owner_contact" class="validate" required>

    <label>reservation_number</label>
    <input type="text" name="reservation_number" id="reservation_number" class="validate" required>

    <label>cottage_name</label>
    <input type="text" name="cottage_name" id="cottage_name" class="validate" required>

    <label>status</label>
    <input type="text" name="status" id="status" class="validate" required>
   
    <div class="center">
        <input type ="submit" name="submit" value="submit" class="btn brand x-depth-0">
</div>

    </form>

    <?php include "footer.php"?>
    </html>