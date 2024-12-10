<?php
error_reporting(0);
session_start();
// if($_SESSION["email"]){
include 'header.php';
include 'connection.php';
include 'sidebar.php';
include 'navigation.php';

?>

<body style="font-family: courier new">
   <!-- Overview Start -->
   <div class="container-fluid pt-4 px-4">
      <div class="row g-4" style="text-align: center">
         <div class="col-sm-6 col-xl-3">
            <a href="registered.php">
               <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                  <i class="fa fa-user-plus fa-3x text-primary"></i>
                  <div class="ms-3">
                     <p class="mb-2"><b><i>TOTAL USERS</i></b></p>
                     <?php
                     $sql = "SELECT * FROM registration";
                     if ($result = mysqli_query($con, $sql)) {
                        $rowcount = mysqli_num_rows($result);
                        echo '<h1>' . $rowcount . '</h1>';
                     }
                     ?>
                  </div>
               </div>
            </a>
         </div>
         <div class="col-sm-6 col-xl-3">
            <a href="category.php">
               <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                  <i class="fa fa-bars me-2 fa-3x text-primary "></i>
                  <div class="ms-3">
                     <p class="mb-2"><b><i>CATEGORIES</i></b></p>
                     <?php
                     $sql = "SELECT * FROM categories";
                     if ($result = mysqli_query($con, $sql)) {
                        $rowcount = mysqli_num_rows($result);
                        echo '<h1>' . $rowcount . '</h1>';
                     }
                     ?>
                  </div>
               </div>
            </a>
         </div>
         <div class="col-sm-6 col-xl-3">
            <a href="booking.php">
               <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                  <i class="fa fa-table fa-3x text-primary"></i>
                  <div class="ms-3">
                     <p class="mb-2"><b><i>BOOKING</i></b></p>
                     <?php
                     $sql = "SELECT * FROM booking";
                     if ($result = mysqli_query($con, $sql)) {
                        $rowcount = mysqli_num_rows($result);
                        echo '<h1>' . $rowcount . '</h1>';
                     }
                     ?>
                  </div>
               </div>
            </a>
         </div>
         
         <div class="col-sm-6 col-xl-3">
            <a href="contact.php">
               <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                  <i class="fa fa-phone-alt me-2l fa-3x text-primary "></i>
                  <div class="ms-3">
                     <p class="mb-2"><b><i>Contact Details</i></b></p>
                     <?php
                     $sql = "SELECT * FROM contact";
                     if ($result = mysqli_query($con, $sql)) {
                        $rowcount = mysqli_num_rows($result);
                        echo '<h1>' . $rowcount . '</h1>';
                     }
                     ?>
                  </div>
               </div>
            </a>
         </div>

         <div class="col-sm-6 col-xl-3">
            <a href="room.php">
               <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                  <i class="bi bi-house  fa-3x text-primary "></i>
                  <div class="ms-3">
                     <p class="mb-2"><b><i>Room</i></b></p>
                     <?php
                     $sql = "SELECT * FROM room";
                     if ($result = mysqli_query($con, $sql)) {
                        $rowcount = mysqli_num_rows($result);
                        echo '<h1>' . $rowcount . '</h1>';
                     }
                     ?>
                  </div>
               </div>
            </a>
         </div>
         <div class="col-sm-6 col-xl-3">
            <a href="review.php">
               <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                  <i class="fa fa-comments fa-3x text-primary"></i>
                  <div class="ms-3">
                     <p class="mb-2"><b><i>Review</i></b></p>
                      <?php
                     $sql = "SELECT * FROM review";
                     if ($result = mysqli_query($con, $sql)) {
                        $rowcount = mysqli_num_rows($result);
                        echo '<h1>' . $rowcount . '</h1>';
                     }
                     ?>
                  </div>
               </div>
            </a>
         </div>

         <div class="col-sm-6 col-xl-3">
            <!-- <a href="gallery.php">
               <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                  <i class="fa fa-images fa-3x text-primary "></i>
                  <div class="ms-3">
                     <p class="mb-2"><b><i>GALLERY</i></b></p>
                     php
                     $sql = "SELECT * FROM gallery";
                     if ($result = mysqli_query($con, $sql)) {
                        $rowcount = mysqli_num_rows($result);
                        echo '<h1>' . $rowcount . '</h1>';
                     }
                     ?>
                  </div>
               </div>
            </a> -->
         </div>
      </div>
   </div>
   <!-- Overview End -->

   <!--Booking Start-->
   <div class="col-sm-12 col-xl-12" style="margin-top: 5%">
      <div class="bg-secondary rounded h-100 p-4">
         <h6 class="mb-4" style="text-align: center;"><b><i>BOOKING</i> </b></h6>

         <table class="table table-hover" style="text-align: center;">
            <thead>
               <tr>
                  <th scope="col">First Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Mobile No</th>
                  <th scope="col">Country</th>
                  <th scope="col">Total Room</th>
                  <th scope="col">Check-In </th>
                  <th scope="col">Check-Out</th>
                  <th scope="col">Payment</th>
               </tr>
            </thead>
            <?php
            $query_select = "SELECT *from booking";
            $query_run = mysqli_query($con, $query_select);
            if (mysqli_num_rows($query_run) > 0) {
               foreach ($query_run as $row) {
            ?>
                  <tbody style="padding:left=100px;">
                     <tr>
                        <td><?php echo $row['firstname']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['mobileno']; ?></td>
                        <td><?php echo $row['country']; ?></td>
                        <td><?php echo $row['total_room']; ?></td>
                        <td><?php echo $row['checkin']; ?></td>
                        <td><?php echo $row['checkout']; ?></td>
                        <td><?php echo $row['payment']; ?></td>
                     </tr>
               <?php
               }
            }
               ?>
         </table>
      </div>
   </div>
   <!--Booking End-->

   <!--Contact Us Start-->
   <div class="col-sm-12 col-xl-12" style="margin-top: 5%">
      <div class="bg-secondary rounded h-100 p-4">
         <h6 class="mb-4" style="text-align: center"><b><i>Contacts</i></b> </h6>

         <table class="table table-hover" style="text-align: center;">
            <thead>
               <tr>
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Message</th>
                  <!-- <th scope="col">Query</th> -->
               </tr>
            </thead>
            <?php
            $query_select = "SELECT *from contact";
            $query_run = mysqli_query($con, $query_select);
            if (mysqli_num_rows($query_run) > 0) {
               foreach ($query_run as $row) {
            ?>
                  <tbody style="padding:left=100px;">
                     <tr>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['message']; ?></td>
                     </tr>
               <?php
               }
            }
               ?>
         </table>
      </div>
      <!--Contact Us End-->
     
      <!--Registration Start-->
      <div class="col-sm-12 col-xl-12" style="margin-top: 5%">
         <div class="bg-secondary rounded h-100 p-4">
            <h6 class="mb-4" style="text-align: center"><b><i>REGISTERED USERS</i></b></h6>

            <table class="table table-hover" style="text-align: center;">
               <thead>
                  <tr>
                     <th scope="col">First Name</th>
                     <th scope="col">Last Name</th>
                     <th scope="col">Email</th>
                     <!-- <th scope="col">Password</th> -->
                  </tr>
               </thead>
               <?php
               $query_select = "SELECT *from registration";
               $query_run = mysqli_query($con, $query_select);
               if (mysqli_num_rows($query_run) > 0) {
                  foreach ($query_run as $row) {
               ?>
                     <tbody style="padding:left=100px;">
                        <tr>
                           <td><?php echo $row['firstname']; ?></td>
                           <td><?php echo $row['lastname']; ?></td>
                           <td><?php echo $row['email']; ?></td>
                           <!-- <td><?php echo $row['password']; ?></td> -->
                        </tr>
                  <?php
                  }
               }
                  ?>
                     </tbody>
            </table>
         </div>
      </div>
      <!--Registration End-->

      <!--Review Us Start-->
   <div class="col-sm-12 col-xl-12" style="margin-top: 5%">
      <div class="bg-secondary rounded h-100 p-4">
         <h6 class="mb-4" style="text-align: center"><b><i>Reviews</i></b> </h6>

         <table class="table table-hover" style="text-align: center;">
            <thead>
               <tr>
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Review</th>
                  <!-- <th scope="col">Query</th> -->
               </tr>
            </thead>
            <?php
            $query_select = "SELECT *from review";
            $query_run = mysqli_query($con, $query_select);
            if (mysqli_num_rows($query_run) > 0) {
               foreach ($query_run as $row) {
            ?>
                  <tbody style="padding:left=100px;">
                     <tr>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['review']; ?></td>
                     </tr>
               <?php
               }
            }
               ?>
         </table>
      </div>
      <!--Review Us End-->
      <?php
         // }
         // else {
         //           echo "<script>alert('Login in  to proceed'); window.location.href='./login.php';</script>";
         // }
      include 'footer.php';
      include 'javascript.php';
      ?>