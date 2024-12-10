<?php
 error_reporting(0);
include 'header.php';
include 'sidebar.php';
include 'navigation.php';
include 'connection.php';

$category_id = $_GET['edit'];
if(isset($_POST['update_category'])){
   $category_name = $_POST['category_nm'];

   if(empty($category_name)){
      $message[] = 'please fill out all!';    
   }else{
      $update_data = "UPDATE categories SET category_nm='$category_name' WHERE id = '$category_id'";
      $upload = mysqli_query($con, $update_data);

      if($upload){
         echo "<script>alert('Catrgory Update Successfully.'); window.location.href='category.php';</script>";
      }else{
         $message[] = 'please fill out all!'; 
      }

   }
};
?>

<!--DOCTYPE html-->
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
<div class="admin-category-form-container centered">
   <?php
      
      $select = mysqli_query($con, "SELECT * FROM categories WHERE id = '$category_id'");
      while($row = mysqli_fetch_assoc($select)){

   ?>   
   <form action="" method="POST" enctype="multipart/form-data">
      <h3 class="title">Update Categories</h3>
      <input type="text" class="box" name="category_nm" placeholder="Enter the category name">
      <input type="submit" value="Update category" name="update_category" class="btn">
      <a href="category.php" class="btn">Go back!</a>
   </form>

   <?php }; ?>
</div>
</div>
</body>
