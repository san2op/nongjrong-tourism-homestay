
<html>
<body>
<div class="container">
 <div class="row">
   <div class="col-sm-8">
   
    <div class="table-responsive">
      <table class="table table-bordered">
       
         
    </thead>
    <tbody>
      <tr>
      
      <td><?php echo $data['userid']??''; ?></td>
      <td><?php echo $data['name']??''; ?></td>
      <td><?php echo $data['password']??''; ?></td>
      <td><?php echo $data['nationality']??''; ?></td>
      <td><?php echo $data['gender']??''; ?></td>
      <td><?php echo $data['date_of_birth']??''; ?></td>
    
     </tr>
     
        <!-- <td colspan="8"> -->
  </td>
    <tr>
  
    </tbody>
     </table>
   </div>
</div>
</div>
</div>
</body>
</html>

<?php
include('phpconnection5.php');
$query = "SELECT * FROM register";
$result = mysqli_query($conn, $query);
//fetch data as array
$data=mysqli_fetch_assoc($result);
?>
<table border ="1" cellspacing="0" cellpadding="10">
  <tr>
    <th>S.N</th>
    <th>userid</th>
    <th>name</th>
    <th>password</th>
    <th>nationality </th>
    <th>gender</th>
    <th>date_of_birth</th>

  </tr>
<?php
if (mysqli_num_rows($result) > 0) {
  // $sn=1;
  while($data = mysqli_fetch_assoc($result)) {
    

    
 ?>
 <tr>
   <!-- <td><?php// echo $sn; ?> </td> -->
   <td><?php echo $data['userid']; ?></td>
   <td><?php echo $data['name']; ?> </td>
   <td><?php echo $data['password']; ?> </td>
   <td><?php echo $data['nationality']; ?> </td>
   <td><?php echo $data['gender']; ?> </td>
   <td><?php echo $data['date_of_birth']; ?> </td>
   <td> <a href="updateuser.php?userid=<?php echo $data['userid'] ?>" >UPDATE</a></td>
  </tr>
 <?php
  // $sn++;
  }} else { ?>
    <tr>
     <!-- <td colspan="8">No data found</td> -->
    </tr>
 <?php } ?>
 </table