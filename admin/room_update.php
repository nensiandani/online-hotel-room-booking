<?php
 error_reporting(0);
include 'header.php';
include 'sidebar.php';
include 'navigation.php';

include 'connection.php';

$room_id = $_GET['edit'];

if(isset($_POST['room_update'])){

   $room_name = $_POST['room_nm'];
   $room_price = $_POST['price'];
   $room_image = $_FILES['image_nm']['name'];
   $room_image_tmp_name = $_FILES['image_nm']['tmp_name'];
   $room_image_folder = 'uploaded_img/'.$room_image;

   if(empty($room_name) || empty($room_price) || empty($room_image)){
      $message[] = 'please fill out all!';    
   }else{

      $update_data = "UPDATE room SET room_nm='$room_name', price='$room_price', image_nm='$room_image'  WHERE id = '$room_id'";
      $upload = mysqli_query($con, $update_data);

      if($upload){
         move_uploaded_file($room_image_tmp_name, $room_image_folder);        
         echo "<script>alert('Room Update Successfully.'); window.location.href='room.php';</script>";
      }else{
         $message[] = 'please fill out all!'; 
      }

   }
};

?>

<!DOCTYPE html>
<html lang="en">

<body>

<?php
   if(isset($message)){
      foreach($message as $message){
         echo '<span class="message">'.$message.'</span>';
      }
   }
?>

<div class="container">


<div class="admin-product-form-container centered">

   <?php
      
      $select = mysqli_query($con, "SELECT * FROM room WHERE id = '$room_id'");
      while($row = mysqli_fetch_assoc($select)){

   ?>
   
   <form action="" method="post" enctype="multipart/form-data">
      <h3 class="title">Update The Room</h3>
      <input type="text" class="box" name="room_nm" value="<?php echo $row['room_nm']; ?>" placeholder="Enter the Room name">
      <input type="number" min="0" class="box" name="price" value="<?php echo $row['price']; ?>" placeholder="Enter the Room price">
      <input type="file" class="box" name="image_nm"  accept="image/png, image/jpeg, image/jpg">
      <input type="submit" value="Room Update" name="room_update" class="btn">
      <a href="room.php" class="btn">go back!</a>
   </form>
   
   <?php }; ?>
</div>
</div>
</body>
