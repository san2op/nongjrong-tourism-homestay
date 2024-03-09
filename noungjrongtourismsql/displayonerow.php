
<?php 

include "phpconnection5.php";

if(isset($_POST['delete'])){

  $id_to_delete = mysqli_real_escape_string($conn, $_POST['id_to_delete']);

  $sql = "DELETE FROM register WHERE userid =  $id_to_delete";

  if(mysqli_query($conn, $sql)){
    header('Location: displayuser2.php');
  } else {
    echo 'query error: '. mysqli_error($conn);
  }

}


	// check GET request id param
	if(isset($_GET['reservation_no'])){

		// escape sql chars
		$reservation_no = mysqli_real_escape_string($conn, $_GET['reservation_no']);

		// make sql
		$sql = "SELECT * FROM register WHERE reservation_no   = $reservation_no  ";

		// get the query result
		$result = mysqli_query($conn, $sql);
       
		// fetch result in array format
		$reservation = mysqli_fetch_row($result);

		mysqli_free_result($result);
	mysqli_close($conn);

       // print_r($homestay);

	}

?>

<html>

<?php include "header.php"; ?>
<?php  include "gobacktodashboard.php";?>
<div class="container center">
<!-- <table> 
<tr>
    <th>name</th>
    <th>password</th>
    <th>nationality</th>
    <th>gender</th>
    <th>date_of_birth</th>
</tr> -->
    <?php
    if(isset($reservation)):
      ?>
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
     
     
  
      <!-- delete FORM -->
			<form action="displayonerow.php" method="POST">
				<input type="hidden" name="id_to_display" value="<?php echo $reservation['reservation_no']; ?>">
				<input type="submit" name="display" value="display" class="btn brand z-depth-0">
			</form>

<?php include "footer.php"; ?>



</html>




