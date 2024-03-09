<?php 

include "phpconnection5.php";


// write query for all pizzas
$sql = 'SELECT name,password,nationality, gender,date_of_birth,userid FROM register ORDER BY userid';
// get the result set (set of rows)
$result = mysqli_query($conn, $sql);
// fetch the resulting rows as an array
$customer = mysqli_fetch_all($result, MYSQLI_ASSOC);


?>


<!DOCTYPE html>
<html>
<?php include "header.php";?>

<?php  include "gobacktodashboard.php";?>
<?php  include "gobacktoadmindashboard.php";?>


<h4 class="center grey-text">customer!</h4>

<div class="container">
    <div class="row">
  



        <?php foreach($customer as $customer){ ?>

            <div class="col s6 md3">
                <div class="card z-depth-0">
                    <div class="card-content center">
                      
     
                      
                        <div><?php echo htmlspecialchars($customer['name']); ?></div>
                        <div><?php echo htmlspecialchars($customer['password']); ?></div>
                        <div><?php echo htmlspecialchars($customer['nationality']); ?></div>
                        <div><?php echo htmlspecialchars($customer['gender']); ?></div>
                        <div><?php echo htmlspecialchars($customer['date_of_birth']); ?></div>
                        <div><?php echo htmlspecialchars($customer['userid']); ?></div>
  
                    </div>
                    <div class="card-action right-align">
                        <!-- <a class="brand-text" href="updateuser.php?userid=<?php// echo $data['userid'] ?>">Update</a> -->
                        <td> <a href="delete.php?userid=<?php echo $customer['userid'] ?>" >MORE INFO</a></td>
                    </div>
                </div>
            </div>

        <?php } ?>

    </div>
</div>



<?php include "footer.php";?>
</html>