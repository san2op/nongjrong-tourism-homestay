<?php 

include "phpconnection5.php";


// write query for all pizzas
$sql = 'SELECT arrival,departure,first_name,last_name,email,phone,adult,children,reservation_no FROM reservation';
// get the result set (set of rows)
$result = mysqli_query($conn, $sql);
// fetch the resulting rows as an array
 $reservation = mysqli_fetch_all($result, MYSQLI_ASSOC);



?>


<!DOCTYPE html>
<html>
<?php include "header.php";?>
<?php  include "gobacktodashboard.php";?>
<?php  include "gobacktomanagerdashboard.php";?>

<h4 class="center grey-text">Homestay!</h4>

<div class="container">
    <div class="row">
  



        <?php foreach($reservation as $reservation){ ?>

            <div class="col s6 md3">
                <div class="card z-depth-0">
                <!-- <img src="jingthiah3.jpeg"class="image" width=20%> -->
                    <div class="card-content center">

     
                      
                        <div><p>arival-<?php echo htmlspecialchars($reservation['arrival']); ?></p></div>
                        <div><p>departure-<?php echo htmlspecialchars($reservation['departure']); ?></p></div>
                        
                        <div><p>first name - <?php echo htmlspecialchars($reservation['first_name']); ?></p></div>
                        <div><p>Last name - <?php echo htmlspecialchars($reservation['last_name']); ?></p></div>
                        
                        <div><p>Email - <?php echo htmlspecialchars($reservation['email']); ?></p></div>
                        <div><p>phone no - <?php echo htmlspecialchars($reservation['phone']); ?></p></div>

                        <div><p>no of adult - <?php echo htmlspecialchars($reservation['adult']); ?></p></div>
                        <div><p>no of children - <?php echo htmlspecialchars($reservation['children']); ?></p></div>
                    </div>
                </div>
                </div>
        
        <?php } ?>
    
            

    </div>
</div>

 

<?php include "footer.php";?>
</html>