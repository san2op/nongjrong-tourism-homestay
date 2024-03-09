<?php 

include "phpconnection5.php";

		// make sql
		$sql = "SELECT arrival,departure,first_name,last_name,email,phone,adult,children,  reservation_no FROM reservation";

		// get the query result
		$result = mysqli_query($conn, $sql);
       
		// fetch result in array format
        $reservation = mysqli_fetch_all($result, MYSQLI_ASSOC);

		mysqli_free_result($result);
	mysqli_close($conn);

       print_r($reservation);


?>
<!DOCTYPE html>
<html>
<?php include "header.php";?>
<?php  include "gobacktodashboard.php";?>
       

	
<?php foreach($reservation as $reservation){
	 ?>
		<div class="card-action left-align">
          <a class="brand-text" href="reservedetail.php?reservation_no=<?php echo $reservation['reservation_no'] ?>">more info</a>
                        
        
                    </div>
					<?php } ?>
 
</div>

 

<?php include "footer.php";?>
</html>