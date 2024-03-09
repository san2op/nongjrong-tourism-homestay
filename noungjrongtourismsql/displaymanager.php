<?php 

include "phpconnection5.php";


// write query for all pizzas
$sql = 'SELECT email,password,manager_id FROM managerregister ORDER BY manager_id';
// get the result set (set of rows)
$result = mysqli_query($conn, $sql);
// fetch the resulting rows as an array
$manager = mysqli_fetch_all($result, MYSQLI_ASSOC);


?>


<!DOCTYPE html>
<html>
<?php include "header.php";?>

<?php  include "gobacktodashboard.php";?>
<h4 class="center grey-text">customer!</h4>

<div class="container">
    <div class="row">
  



        <?php foreach($manager as $manager){ ?>

            <div class="col s6 md3">
                <div class="card z-depth-0">
                    <div class="card-content center">
                      
     
                      
                        <div><?php echo htmlspecialchars($manager['email']); ?></div>
                        <div><?php echo htmlspecialchars($manager['password']); ?></div>
                       
                        <div><?php echo htmlspecialchars($manager['manager_id']); ?></div>
  
                    </div>
                    <div class="card-action right-align">
                        <!-- <a class="brand-text" href="updateuser.php?userid=<?php// echo $data['userid'] ?>">Update</a> -->
                        <td> <a href="#.php?userid=<?php echo $manager['manager_id'] ?>" >MORE INFO</a></td>
                    </div>
                </div>
            </div>

        <?php } ?>

    </div>
</div>



<?php include "footer.php";?>
</html>