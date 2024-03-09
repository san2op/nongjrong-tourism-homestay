<?php 

include "phpconnection5.php";


	// check GET request id param
	if(isset($_GET['reservation_no'])){

		// escape sql chars
		$reservation_no = mysqli_real_escape_string($conn, $_GET['reservation_no']);

		// make sql
		$sql = "SELECT * FROM reservation WHERE reservation_no   = $reservation_no LIMIT 0, 1 ";

		// get the query result
		$result = mysqli_query($conn, $sql);
       
		// fetch result in array format
		$reservation = mysqli_fetch_assoc($result);
		//mysql_fetch_row($result);
		mysqli_free_result($result);
	

		mysqli_close($conn);
        print_r($reservation);

	}

?>


<html>

<?php include "header.php"; ?>

<?php  include "gobacktodashboard.php";?>

<div class="container center">
    <?php if(isset($reservation)): ?>
        <h4>your order</h4>
        <p>arrival -  <?php echo $reservation['arrival']; ?></p>
        <p> departure - <?php echo $reservation['departure']; ?></p>
        <p> first_name - <?php echo $reservation['first_name']; ?></p>
        <p> last_name - <?php echo $reservation['last_name']; ?></p>
        <p> email - <?php echo $reservation['email']; ?></p>
        <p> phone - <?php echo $reservation['phone']; ?></p>
        <p> adult - <?php echo $reservation['adult']; ?></p>
        <p> children - <?php echo $reservation['children']; ?></p>

        <?php endif ?>
	</div>
	<?php include "footer.php";?>
	</html>