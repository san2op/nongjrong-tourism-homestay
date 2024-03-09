<?php 

include "phpconnection5.php";

if(isset($_POST['delete'])){

    $id_to_delete = mysqli_real_escape_string($conn, $_POST['id_to_delete']);
  
    $sql = "DELETE FROM homestay WHERE homenumber =  $id_to_delete";
  
    if(mysqli_query($conn, $sql)){
      header('Location: managerhomstay.php');
    } else {
      echo 'query error: '. mysqli_error($conn);
    }
  
  }

	// check GET request id param
	if(isset($_GET['homenumber'])){

		// escape sql chars
		$homenumber = mysqli_real_escape_string($conn, $_GET['homenumber']);

		// make sql
		$sql = "SELECT * FROM homestay WHERE homenumber   = $homenumber  ";

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
    <?php if($homestay): ?>
        <h4><?php  echo $homestay['cottage_name']; ?></h4>
        <p>Contact Owner -  <?php echo $homestay['owner_contact']; ?></p>
        <p> Homestay Facilities - <?php echo $homestay['facilities']; ?></p>
        <p> status - <?php echo $homestay['status']; ?></p>
      
      <!-- manager delete FORM -->
			<form action="deletehomestay.php" method="POST">
				<input type="hidden" name="id_to_delete" value="<?php echo $homestay['homenumber']; ?>">
				<input type="submit" name="delete" value="delete" class="btn brand z-depth-0">
			</form>
<!--manager update FORM -->
 <td> <a class="btn danger s-depth-0" href="#.php?userid=<?php echo $customer['userid'] ?>">UPDATE</a></td>
    <?php endif ?>
</div>
    </table>
  

<?php include "footer.php"; ?>



</html>