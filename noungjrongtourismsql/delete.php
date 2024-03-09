
<?php 

include "phpconnection5.php";

if(isset($_POST['display'])){

  $id_to_display = mysqli_real_escape_string($conn, $_POST['id_to_display']);

  $sql = "SELECT FROM register WHERE userid =  $id_to_display";

  if(mysqli_query($conn, $sql)){
    header('Location: dashboard.php');
  } else {
    echo 'query error: '. mysqli_error($conn);
  }

}


	// check GET request id param
	if(isset($_GET['userid'])){

		// escape sql chars
		$userid = mysqli_real_escape_string($conn, $_GET['userid']);

		// make sql
		$sql = "SELECT * FROM register WHERE userid   = $userid  ";

		// get the query result
		$result = mysqli_query($conn, $sql);
       
		// fetch result in array format
		$customer = mysqli_fetch_assoc($result);

		mysqli_free_result($result);
	mysqli_close($conn);

       // print_r($homestay);

	}

?>

<html>

<?php include "header.php"; ?>
<?php  include "gobacktodashboard.php";?>
<div class="container center">

    <?php
     if($customer): 
     
     
     ?>
   
        <h4><?php  echo $customer['name']; ?></h4>
        <p>Password -  <?php echo $customer['password']; ?></p>
        <p> Nationality - <?php echo ($customer['nationality']); ?></p>
        <p> Gender - <?php echo ($customer['gender']); ?></p>
        <p> Date of Birth - <?php echo ($customer['date_of_birth']); ?></p>
  
      <!-- delete FORM -->
			<form action="delete.php" method="POST">
				<input type="hidden" name="id_to_delete" value="<?php echo $customer['userid']; ?>">
				<input type="submit" name="delete" value="delete" class="btn brand z-depth-0">
			</form>
<!-- update FORM -->
 <td> <a class="btn danger s-depth-0" href="update.php?userid=<?php echo $customer['userid'] ?>">UPDATE</a></td>
    <?php endif ?>
</div>
    </table>
<?php include "footer.php"; ?>



</html>




