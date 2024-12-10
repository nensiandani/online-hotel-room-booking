<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>The Stars Sky</title>

    <!-- Favicon -->
    <link rel="icon" href="./img/logo/f2.jpg">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

<?php

include 'connection.php';
$user = $_SESSION['email'];

if (isset($_POST['add_to_room'])) {
    if ($_SESSION['email']) {

       $room_name = $_POST['room_nm'];
       $room_price = $_POST['price'];
       $room_image = $_POST['image_nm'];
      
       $user = $_SESSION['email'];
       
       $select_cart = mysqli_query($con, "SELECT * FROM `cart` WHERE name = '$room_name' && user='$user'");
       if (mysqli_num_rows($select_cart) > 0) {
          echo "<script>alert('Room already added.');</script>";
       } else {
          $insert_room = mysqli_query($con, "INSERT INTO cart(name, price, image,user,total) VALUES('$room_name', '$room_price', '$room_image', '$user','$room_price')");
          echo "<script>alert('Room added.');window.location.href='select.php';</script>";
       }
    } else {
       echo "<script>alert('login to proceed'); window.location.href='login.php';</script>";
    }
 }
    
?>
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- /Preloader -->

    <?php
        include "header.php";
    ?>
    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/16.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <h2 class="page-title">TWIN ROOMS</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Room</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->

    <!-- Rooms Area Start -->
    <div class="roberto-rooms-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                <?php
                 $user = $_SESSION['email'];
                 // Select rooms not already in the user's cart
                 $select_room = mysqli_query($con, "SELECT * FROM `room` r 
                                    WHERE r.cate_nm = 'Twin Rooms' 
                                    AND r.room_nm NOT IN (SELECT c.name FROM `cart` c)");
                    if (mysqli_num_rows($select_room) > 0) {
                        while ($row = mysqli_fetch_assoc($select_room)) {
                ?>
                    <!-- Single Room Area -->
                    <form action="" method="POST">

                    <div class="single-room-area d-flex align-items-center mb-50 wow fadeInUp" data-wow-delay="100ms">
                        <!-- Room Thumbnail -->
                        <div class="room-thumbnail">
                            <img src="admin/uploaded_img/<?php echo $row['image_nm']; ?>" alt="">
                        </div>
                        <!-- Room Content -->
                        <div class="room-content">
                            <h2><?php echo $row['room_nm']; ?></h2>
                            <h4><?php echo " " . $row['price']; ?> &#8377 <span>/ Day</span></h4>
                            <div class="room-feature">
                                <h6>Size: <span>32 ft</span></h6>
                                <h6>Capacity: <span>Max persion 2</span></h6>
                                <h6>Bed: <span>Twin beds</span></h6>
                                <h6>Services: <span>Wifi, television ...</span></h6>
                            </div>
                            <input type="hidden" name="room_nm" value="<?php echo $row['room_nm']; ?>">
                           <input type="hidden" name="price" value="<?php echo $row['price']; ?>">
                           <input type="hidden" name="image_nm" value="<?php echo $row['image_nm']; ?>">
                           <input type="submit" class="btn roberto-btn w-100" value="Book Now" name="add_to_room" />
                           <!-- <a href="#" class="btn view-detail-btn">Add To Room <i class="fa fa-long-arrow" aria-hidden="true"></i></a> -->
                        </div>
                    </div>   
                    </form> 
                    <?php
                        }
                    } else {
                        echo "<p>No rooms available in this category.</p>";
                    }
                    ?> 
                    <!-- Pagination -->
                    <nav class="roberto-pagination wow fadeInUp mb-100" data-wow-delay="1000ms">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="room1.php">1</a></li>
                            <li class="page-item"><a class="page-link" href="room2.php">2</a></li>
                            <li class="page-item"><a class="page-link" href="room3.php">3</a></li>
                            <li class="page-item"><a class="page-link" href="room4.php">4</a></li>
                        </ul>
                    </nav>
                </div>

                <div class="col-12 col-lg-4">
                    <!-- Hotel Reservation Area -->
                    <!-- <div class="hotel-reservation--area mb-100">
                        <form action="#" method="post">
                            <div class="form-group mb-30">
                                <label for="checkInDate">Date</label>
                                <div class="input-daterange" id="datepicker">
                                    <div class="row no-gutters">
                                        <div class="col-6">
                                            <input type="text" class="input-small form-control" id="checkInDate" name="checkInDate" placeholder="Check In">
                                        </div>
                                        <div class="col-6">
                                            <input type="text" class="input-small form-control" name="checkOutDate" placeholder="Check Out">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-30">
                                <label for="guests">Guests</label>
                                <div class="row">
                                    <div class="col-6">
                                        <select name="adults" id="guests" class="form-control">
                                            <option value="adults">Adults</option>
                                            <option value="01">01</option>
                                            <option value="02">02</option>
                                            <option value="03">03</option>
                                            <option value="04">04</option>
                                            <option value="05">05</option>
                                            <option value="06">06</option>
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <select name="children" id="children" class="form-control">
                                            <option value="children">Children</option>
                                            <option value="01">01</option>
                                            <option value="02">02</option>
                                            <option value="03">03</option>
                                            <option value="04">04</option>
                                            <option value="05">05</option>
                                            <option value="06">06</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-50">
                                <div class="slider-range">
                                    <div class="range-price">Max Price: $0 - $5000</div>
                                    <div data-min="0" data-max="3000" data-unit="$" class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" data-value-min="0" data-value-max="3000" data-label-result="Max Price: ">
                                        <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                        <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                        <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn roberto-btn w-100">Check Available</button>
                            </div>
                        </form>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <!-- Rooms Area End -->

    

   <?php
        include "call_area.php";
        include "partner.php";
        include "footer.php";
   ?>



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