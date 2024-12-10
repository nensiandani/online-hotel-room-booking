<?php
error_reporting(0);
session_start();
// if ($_SESSION["email"]) {
   include 'connection.php';

   if (isset($_POST['add_room'])) {
      $room_name = $_POST['room_nm'];
      $category_name = $_POST['category_nm'];
      $room_price = $_POST['price'];
      $room_image = $_FILES['image_nm']['name'];
      $room_image_tmp_name = $_FILES['image_nm']['tmp_name'];
      $room_image_folder = 'uploaded_img/' . $room_image;

      $insert_query = mysqli_query($con, "INSERT INTO `room`(room_nm ,price,image_nm,cate_nm) VALUES('$room_name', '$room_price', '$room_image', '$category_name')")
         or die('query failed');

      if ($insert_query) {
         move_uploaded_file($room_image_tmp_name, $room_image_folder);
         echo "Room Add Successfully.";
         header('location:room.php');
         
      } else {
         $message[] = 'could not add the food';
      }
   };

   if (isset($_GET['delete'])) {
      $delete_id = $_GET['delete'];
      $delete_query = mysqli_query($con, "DELETE FROM `room` WHERE id = $delete_id ") or die('query failed');
      if ($delete_query) {
         header('location:room.php');
         $message[] = 'Room has been deleted';
      } else {
         header('location:room.php');
         $message[] = 'Room could not be deleted';
      };
   };


   //$id = $_GET['edit'];

   //$id = $_GET['room_update'];

   if (isset($_POST['room_update'])) {
      $id = $_POST['id'];
      $room_name = $_POST['room_nm'];
      $category_name = $_POST['category_nm'];
      $room_price = $_POST['price'];
      $room_image = $_FILES['image_nm']['name'];
      $room_image_tmp_name = $_FILES['image_nm']['tmp_name'];
      $room_image_folder = 'uploaded_img/' . $room_image;

      if (empty($room_name) || empty($category_name) || empty($room_price) || empty($room_image)) {
         $message[] = 'please fill out all!';
      } else {

         $update_data = "UPDATE room SET room_nm='$room_name', price='$room_price', image_nm='$room_image', cate_nm='$category_name'  WHERE id = '$room_id'";
         $upload = mysqli_query($con, $update_data);

         if ($upload) {
            move_uploaded_file($room_image_tmp_name, $room_image_folder);
            header('location:room.php');
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
      <form action="" method="POST" class="add-product-form" enctype="multipart/form-data" style="font-family: courier new">
         <h3>Want to add item</h3>
         <input type="text" name="room_nm" placeholder="Room Name" class="box">
         <input type="number" name="price" min="0" placeholder="Price" class="box">
         <select name="category_nm" id="category_name" class="custom-select browser-default" required>
            <option hidden disabled selected value>Category</option>
            <?php
            $catsql = "SELECT * FROM `categories`";
            $catresult = mysqli_query($con, $catsql);
            while ($row = mysqli_fetch_assoc($catresult)) {
               //$category_id = $row['id'];
               $category_name = $row['category_nm'];
               echo '<option value="' . $category_name . '">' . $category_name . '</option>';
            }
            ?>
         </select>
         <input type="file" name="image_nm" accept="image/png, image/jpg, image/jpeg" class="box" required>
         <input type="submit" value="Add Room" name="add_room" class="btn">
      </form>
      <div class="col-sm-12 col-xl-12">
         <div class="bg-secondary rounded h-100 p-4">
            <h5 class="mb-4" style="text-align: center; font-family: courier new"><b>ROOMS</b></h5>

            <table class="table table-hover" style="text-align: center">
               <thead>
                  <tr>
                     <th>Id</th>
                     <th>Category</th>
                     <th>Room Image </th>
                     <th>Room Name</th>                     
                     <th>price</th>                     
                     <th colspan="2">Action</th>

                  </tr>
               </thead>
               <?php
               $query_select = "SELECT *from room";
               $query_run = mysqli_query($con, $query_select);
               if (mysqli_num_rows($query_run) > 0) {
                  foreach ($query_run as $row) {

               ?>
                     <tbody style="padding:left=100px;">
                        <tr>
                           <td><?php echo $row['id']; ?></td>
                           <td><?php echo $row['cate_nm']; ?></td>
                           <td><img src="uploaded_img/<?php echo $row['image_nm']; ?>" height="100" alt=""></td>
                           <td><?php echo $row['room_nm']; ?></td>
                           <td>Rs.<?php echo $row['price']; ?></td>

                           <td><a href="room_update.php?edit=<?php echo $row['id']; ?>" class="btn"> <i class="fa fa-edit"></i>Edit </a></td>
                           <td><a href="room.php?delete=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-trash"></i>Delete </a></td>
                        </tr>

                  <?php
                  }
               }
                  ?>

            </table>
         </div>
      </div>
   <?php
// } else {
//    echo "<script>alert('login to proceed'); window.location.href='../login.php';</script>";
// }
include 'footer.php';

include 'javascript.php';
?>