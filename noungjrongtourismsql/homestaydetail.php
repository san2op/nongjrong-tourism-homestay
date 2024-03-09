<?php 

include "phpconnection5.php";

if(isset($_POST['button'])) {
	$status="unavailable";}
	// check GET request id param
	if(isset($_GET['homenumber'])){

		// escape sql chars
		$homenumber = mysqli_real_escape_string($conn, $_GET['homenumber']);

		// make sql
		$sql = "SELECT * FROM homestay WHERE homenumber = $homenumber  ";

		// get the query result
		$result = mysqli_query($conn, $sql);
       
		// fetch result in array format
		$homestay = mysqli_fetch_assoc($result);

		mysqli_free_result($result);
	mysqli_close($conn);

       // print_r($homestay);

	}

?>

<html>

<?php include "header.php"; ?>

<?php  include "gobacktodashboard.php";?>

<div class="container center">
    <?php if (isset($homestay)): ?>
        <h4><?php  echo $homestay['cottage_name']; ?></h4>
        <p>Contact Owner -  <?php echo $homestay['owner_contact']; ?></p>
        <p> Homestay Facilities - <?php echo $homestay['facilities']; ?></p>
        <p> status - <?php echo $homestay['status']; ?></p>
		<?php
     
		
			
        
       // if(isset($_POST['button2'])) {
            //echo "This is Button2 that is selected";
       //}
    ?><button> <a class="btn brand-text" href="resevation_process.php">Reservation</a>
	</button>
      
    <?php endif ?>
</div>

<?php include "footer.php"; ?>



</html>