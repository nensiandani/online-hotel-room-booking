<!DOCTYPE html>
<html lang="en">
<?php 
error_reporting(0); 
?>

<head>
    <!-- Title -->
    <title>The Stars Sky</title>

    <!-- Favicon -->
    <link rel="icon" href="./img/logo/f2.jpg">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

   
<?php
   include 'connection.php';
   
   if (isset($_GET['remove'])) {
      $remove_id = $_GET['remove'];
      mysqli_query($con, "DELETE FROM `cart` WHERE id = '$remove_id'");
      header('location:cart.php');
   };

   if (isset($_GET['delete_all'])) {
      mysqli_query($con, "DELETE FROM `cart`");
      header('location:cart.php');
   }
?>
</head>

<body>

   <?php
   include 'header.php';  
   if ($_SESSION['email']) {
   ?>
      <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/16.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <h2 class="page-title">Billing Section</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <!-- <li class="breadcrumb-item active" aria-current="page">Room</li> -->
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->


      <!-- cart -->
      <div class="cart-section mt-100 mb-150">
         <div class="container-xxl">
            <div class="container">
               <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                  <h1 class="section-title ff-secondary text-center text-primary fw-normal" style="margin-bottom: 6%">Billing</h1>
               </div>
            </div>
         </div>
         <div class="container">
            <div class="row">
               <div class="col-lg-8 col-md-12">
                  <div class="cart-table-wrap">
                     <table class="table table-striped table-hover">
                        <thead class="cart-table-head">

                           <tr class="table-head-row">
                              <th class="product-remove"><a href="cart.php?delete_all"><i class="fa fa-trash-o"></i></a></th>
                              <th class="product-image"><b>IMAGE</b></th>
                              <th class="product-name"><b>NAME</b></th>
                              <th class="product-price"><b>PRICE</b></th>
                              <th class="product-total"><b>TOTAL</b></th>
                           </tr>

                        </thead>
                        <?php
                        session_start();
                        $user = $_SESSION["email"];
                        $select_cart = mysqli_query($con, "SELECT * FROM `cart` where user='$user'");
                        $grand_total = 0;
                        $room_count = 0; // Initialize room count
                        $show = mysqli_num_rows($select_cart);

                        if (!$show) {
                           echo "</br><a href='room.php'><h1 style='text-align: center' class='display-3 mb-3 animated slideInDown'>Your Cart Is Empty.</h1></a>";
                        } else {
                           while ($row = mysqli_fetch_assoc($select_cart)) {
                              $room_count++; // Increment room count for each room in the cart
                        ?>
                          <tbody>
                                 <tr class="table-body-row">
                                    <td class="product-remove p-3"><a href="cart.php?remove=<?php echo $row['id']; ?>"><i class="fa fa-trash-o"></i></i></a></td>
                                    <td class="product-image"><img src="admin/uploaded_img/<?php echo $row['image']; ?>" height="50" width="50"></td>
                                    <td class="product-name"><?php echo $row['name']; ?></td>
                                    <td class="product-price">Rs.<?php echo number_format($row['price']); ?></td>
                                    <td>
                                       <form action="" method="POST">
                                          <input type="hidden" name="user" value="<?php $_SESSION['name'] ?>">      
                                          <input type="hidden"  name="price" value="<?php echo $row['price']; ?>">
                                       </form>
                                    </td>
                                    <?php $subtotal = $row['price'] ?>
                                    <td>Rs. <?php echo $subtotal; ?> </form>
                                    </td>
                                 </tr>
                           <?php
                              $grand_total += $subtotal;
                           }
                        }
                           ?>
                              </tbody>
                     </table>
                  </div>
               </div>

               <div class="col-lg-4">
                  <div class="total-section">
                     <table class="table table-striped">
                        <thead class="total-table-head">
                           <tr class="table-total-row">
                              <th colspan="2" style="text-align: center"><b>FINAL AMOUNT</b></th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                            <td><strong>Total Rooms: </strong></td>
                              <!-- <form method="POST" action=""> -->
                                 <!-- / type="hidden" value=" php echo $total_rooms; ?>" name="total_room"> -->
                                 <td style="width: 40%"><?php echo $room_count; ?> </td>
                           </tr>
                           <tr class="total-data">
                              <td><strong>Total Price: </strong></td>
                              <form method="post" action="">
                                 <input type="hidden" value="<?php echo $grand_total; ?>" name="grand_total">
                                 <td style="width: 40%">Rs. <?php echo $grand_total; ?> </td>
                           </tr>
                           <tr class="total-data">
                              <td><strong>Total Amount <br />(including all taxes & charges) </strong></td>
                              <td>Rs. <?php echo $grand_total; ?> </td>
                           </tr>

                        </tbody>
                     </table>

                     <div class="m-1 p-1">   
                        <a href="booknow.php"> <button type="button" class="btn btn-primary btn-block " data-toggle="modal" data-target="#checkoutModal">Go to checkout</button></a>
                        <!-- <a href="room1.php"> <button type="button" class="btn btn-primary btn-block " data-toggle="modal" data-target="#checkoutModal">Continue </button></a> -->
                        <a href="room1.php"><p style="margin: 5px;">Can You Want To Add Room? !!!</p></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <!-- end cart -->
   <?php
   } else {
      echo "<script>alert('Login to proceed'); window.location.href='login.php';</script>";
   }
   ?>
   <!-- Footer Start -->
   <?php
   include 'footer.php';
   ?>
   <!-- Footer End -->

   <!-- Back to Top -->
   <!-- <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
   </div> -->

    <!-- **** All JS Files ***** -->
    <!-- jQuery 2.2.4 -->
    <script src="js/jquery.min.js"></script>
    <!-- Popper -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All Plugins -->
    <script src="js/roberto.bundle.js"></script>
    <!-- Active -->
    <script src="js/default-assets/active.js"></script>
</body>

</html>