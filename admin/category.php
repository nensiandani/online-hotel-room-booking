<?php
error_reporting(0);
session_start();
// if ($_SESSION["email"]) {
   include 'connection.php';
    //Add Category
   if (isset($_POST['add_category'])) {
      $category_name = $_POST['category_nm'];

      $insert_query = mysqli_query($con, "INSERT INTO `categories`(category_nm) VALUES('$category_name')")
         or die('query failed');

      if ($insert_query) {  
         header('location:category.php');
         $message[] = 'category added succesfully';
      } else {
         $message[] = 'could not add the category';
      }
   };
      // Delete category
   if (isset($_GET['delete'])) {
      $delete_id = $_GET['delete'];
      $delete_query = mysqli_query($con, "DELETE FROM `categories` WHERE id = $delete_id ") or die('query failed');
      if ($delete_query) {
         header('location:category.php');
         $message[] = 'category has been deleted';
      } else {
         header('location:category.php');
         $message[] = 'category could not be deleted';
      };
   };

      // Update category
   if (isset($_POST['update_category'])) {
      $category_id = $_POST['$category_id'];
      $category_name = $_POST['category_nm'];
      
      if (empty($category_name)) {
         $message[] = 'please fill out all!';
      } else {

         $update_data = "UPDATE categories SET category_nm ='$category_name' WHERE id = ' $category_id'";
         $upload = mysqli_query($con, $update_data);

         if ($upload) {
            header('location:category.php');
         } else {
            $$message[] = 'please fill out all!';
         }
      }
   };


   include 'header.php';
   include 'sidebar.php';
   include 'navigation.php';
?>


   </br>
   </br>

   <body style="font-family: courier new">
      <form action="" method="post" class="add-category-form" enctype="multipart/form-data" style="font-family: courier new">
         <h3>New Category</h3>
         <input type="text" name="category_nm" placeholder="Category name" class="box" required>
         <input type="submit" value="Add" name="add_category" class="btn">
      </form>
      <div class="col-sm-12 col-xl-12">
         <div class="bg-secondary rounded h-100 p-4">
            <h5 class="mb-4" style="text-align: center; font-family: courier"><b><i>CATEGORIES</i></b></h6>

               <table class="table table-hover" style="text-align: center; font-family: courier new">
                  <thead>
                     <tr>
                        <th>Category_id</th>
                        <th>Category_name</th>                        
                        <th colspan=2>Action</th>
                     </tr>
                  </thead>
                  <?php
                  $query_select = "SELECT *from categories";
                  $query_run = mysqli_query($con, $query_select);
                  if (mysqli_num_rows($query_run) > 0) {
                     foreach ($query_run as $row) {

                  ?>
                        <tbody style="padding:left=100px;">
                           <tr>
                              <td><?php echo $row['id']; ?></td>
                              <td><?php echo $row['category_nm']; ?></td>
                              <td><a href="cat_update.php?edit=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-edit"></i> Edit </a></td>
                              <td><a href="category.php?delete=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-trash"></i> Delete </a></td>
                           </tr>

                     <?php
                     }
                  }
                     ?>

               </table>
         </div>
      </div>
<?php
//  }else {
//    echo "<script>alert('Login to proceed'); window.location.href='../login.php';</script>";
// }
include 'footer.php';

include 'javascript.php';
   ?>