<?php 

include "phpconnection5.php";


// write query for all pizzas
$sql = 'SELECT cottage_name, status, homenumber FROM homestay ORDER BY homenumber';
// get the result set (set of rows)
$result = mysqli_query($conn, $sql);
// fetch the resulting rows as an array
$homestay = mysqli_fetch_all($result, MYSQLI_ASSOC);


?>


<!DOCTYPE html>
<html>
<?php include "header.php";?>

<?php  include "gobacktodashboard.php";?>
<?php  include "gobacktomanagerdashboard.php";?>


<h4 class="center grey-text">Homestay!</h4>

<div class="container">
    <div class="row">
  



        <?php foreach($homestay as $homestay){ ?>

            <div class="col s6 md3">
                <div class="card z-depth-0">
                    <div class="card-content center">

     
                      
                        <div><?php echo htmlspecialchars($homestay['cottage_name']); ?></div>
                        <div><?php echo htmlspecialchars($homestay['status']); ?></div>
                        
                    </div>
                    <div class="card-action right-align">
                        <a class="brand-text" href="deletehomestay.php?homenumber=<?php echo $homestay['homenumber'] ?>">more info</a>
                    </div>
                </div>
            </div>

        <?php } ?>

    </div>
</div>



<?php include "footer.php";?>
</html>