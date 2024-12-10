<?php
session_start();
include 'connection.php';
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

</head>
<?php
include 'connection.php';

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $rev=$_POST['review'];
    $qry = "SELECT *FROM registration WHERE email = '$email' AND firstname='$name'";
    $result = mysqli_query($con , $qry);
    if(mysqli_num_rows($result) > 0) {
        $_SESSION['email'] = $email; 
        $_SESSION['name'] = $name;     
    
    $qry="INSERT INTO review (name,email,review) VALUES ('$name','$email','$rev')";
    $result = mysqli_query($con, $qry);
    if ($result){
        echo '<script>alert("Your Review Submit Successfully.😊😊");window.location.href = "review.php";</script>';
    }
    else{
        echo '<script>alert("Please! Try Again.");window.location.href = "review.php";</script>';
    }
}
else {
    echo '<script>alert("please! Create Your Account.");window.location.href = "Registration.php";</script>';
}
}
?>
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
                        <h2 class="page-title">Hotel Review</h2>
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

    <!-- Rooms Area Start -->
    <div class="roberto-rooms-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <!-- Single Room Details Area -->
                    <div class="single-room-details-area mb-50">
                       
                    <!-- Room Review -->
                    <div class="room-review-area mb-100">
                        <h4>Room Review</h4>

                        <!-- Single Review Area -->
                        <div class="single-room-review-area d-flex align-items-center">
                            <div class="reviwer-thumbnail">
                                <img src="img/bg-img/53.jpg" alt="">
                            </div>
                            <div class="reviwer-content">
                                <div class="reviwer-title-rating d-flex align-items-center justify-content-between">
                                    <div class="reviwer-title">
                                        <span>27 Nov 2023</span>
                                        <h6>Brandon Kelley</h6>
                                    </div>
                                    <div class="reviwer-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                                <p>I recently stayed at The-Stars-Sky and had an overall pleasant experience. 
                                    The room was spacious and well-furnished, with a comfortable bed and clean linens. 
                                    The decor was modern, and I appreciated the small touches like the complimentary coffee and bottled water.
                                </p>
                            </div>
                        </div>

                        <!-- Single Review Area -->
                        <div class="single-room-review-area d-flex align-items-center">
                            <div class="reviwer-thumbnail">
                                <img src="img/bg-img/54.jpg" alt="">
                            </div>
                            <div class="reviwer-content">
                                <div class="reviwer-title-rating d-flex align-items-center justify-content-between">
                                    <div class="reviwer-title">
                                        <span>20 Dec 2023</span>
                                        <h6>Sounron Masha</h6>
                                    </div>
                                    <div class="reviwer-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                                <p>I stayed at The-Stars-Sky for a weekend getaway, and while the location was excellent, 
                                    the room left a bit to be desired. The hotel is situated in the heart of the city, 
                                    making it easy to explore nearby attractions, restaurants, and shops. 
                                    The convenience was a huge plus!
                                </p>
                            </div>
                        </div>

                         <!-- Single Review Area -->
                         <div class="single-room-review-area d-flex align-items-center">
                            <div class="reviwer-thumbnail">
                                <img src="img/bg-img/55.png" alt="">
                            </div>
                            <div class="reviwer-content">
                                <div class="reviwer-title-rating d-flex align-items-center justify-content-between">
                                    <div class="reviwer-title">
                                        <span>1 Jan 2024</span>
                                        <h6>Isha Sharma</h6>
                                    </div>
                                    <div class="reviwer-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                                <p>The room was immaculate—spacious, modern, and equipped with everything I could possibly need for a comfortable stay.
                                 The bed was so comfortable that I slept better than I have in months! The room’s décor had a perfect balance of elegance and comfort, creating a relaxing atmosphere.
                                  Housekeeping was exceptional, keeping everything spotless throughout my stay.
                                </p>
                            </div>
                        </div>

                         <!-- Single Review Area -->
                         <div class="single-room-review-area d-flex align-items-center">
                            <div class="reviwer-thumbnail">
                                <img src="img/bg-img/56.png" alt="">
                            </div>
                            <div class="reviwer-content">
                                <div class="reviwer-title-rating d-flex align-items-center justify-content-between">
                                    <div class="reviwer-title">
                                        <span>25 Feb 2024</span>
                                        <h6>Aryan Kapoor</h6>
                                    </div>
                                    <div class="reviwer-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                                <p>The rooms were beautifully designed, spacious, and spotlessly clean.
                                The facilities are nothing short of excellent. The hotel’s spa was a haven of relaxation,
                                 and I indulged in a few treatments that left me feeling completely rejuvenated. 
                                 The pool area was serene, offering a great place to unwind after a day of exploring the local attractions.
                                </p>
                            </div>
                        </div>

                        <!-- Single Review Area -->
                        <div class="single-room-review-area d-flex align-items-center">
                            <div class="reviwer-thumbnail">
                                <img src="img/bg-img/57.jpg" alt="">
                            </div>
                            <div class="reviwer-content">
                                <div class="reviwer-title-rating d-flex align-items-center justify-content-between">
                                    <div class="reviwer-title">
                                        <span>13 Jun 2024</span>
                                        <h6>Amada Lyly</h6>
                                    </div>
                                    <div class="reviwer-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                                <p>I had the pleasure of staying at The-Stars-Sky for a few days, and it was an incredibly relaxing experience. 
                                    The room was spacious and tastefully decorated, creating a cozy atmosphere that made me feel right at home. 
                                    The bed was plush and comfortable, ensuring I got a great night's sleep every night.</p>
                            </div>
                        </div>
                    </div>
                </div>

                
             
     <!-- Contact Form Area Start -->
    <div class="roberto-contact-form-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="100ms">
                        <h2>Give Review</h2>
                        <!-- <h2>Leave Message</h2> -->
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <!-- Form -->
                    <div class="roberto-contact-form">
                        <form action="" method="POST">
                            <div class="row">
                                <div class="col-12 col-lg-6 wow fadeInUp" data-wow-delay="100ms">
                                    <input type="text" name="name" id="name" class="form-control mb-30" placeholder="Your Name" required/>
                                </div>
                                <div class="col-12 col-lg-6 wow fadeInUp" data-wow-delay="100ms">
                                    <input type="email" name="email"  id="email" class="form-control mb-30" placeholder="Your Email"required pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" />
                                </div>
                                <div class="col-12 wow fadeInUp" data-wow-delay="100ms">
                                    <textarea name="review" class="form-control mb-30" id="message" placeholder="Your Review" required/></textarea>
                                </div>
                                <div class="col-12 text-center wow fadeInUp" data-wow-delay="100ms">
                                    <button type="submit" name="submit" class="btn roberto-btn mt-15 p-1">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Form Area End -->
  

                <div class="col-12 col-lg-4">
                    
                    </div> 
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