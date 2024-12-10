<!-- custom css file link  -->
<link rel="stylesheet" href="style-profile.css">

<?php
include 'connection.php';
session_start();
$fname = isset($_SESSION['firstname']) ? $_SESSION['firstname'] : ''; 
$email = isset($_SESSION['email']) ? $_SESSION['email'] : '';
  
?>


<!-- Header Area Start -->
<header class="header-area">
    <!-- Search Form -->
    <div class="search-form d-flex align-items-center">
        <div class="container">
            <form action="index.php" method="get">
                <input type="search" name="search-form-input" id="searchFormInput"
                    placeholder="Type your keyword ...">
                <button type="submit"><i class="icon_search"></i></button>
            </form>
        </div>
    </div>

    <!-- Top Header Area Start -->
    <div class="top-header-area">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="top-header-content">
                        <a href="#"><i class="icon_phone"></i> <span>(+91) 111 2516 2109</span></a>
                        <a href="#"><i class="icon_mail"></i> <span>Thestars-sky@gmail.com</span></a>
                    </div>
                </div>

                <div class="col-6">
                    <div class="top-header-content">
                        <!-- Top Social Area -->
                        <div class="top-social-area ml-auto">
                            <a href="https://www.facebook.com/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="https://twitter.com/?lang=en"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="https://www.tripadvisor.in/"><i class="fa fa-tripadvisor" aria-hidden="true"></i></a>
                            <a href="https://www.instagram.com/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Top Header Area End -->
    <!-- Main Header Start -->
    <div class="main-header-area">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="robertoNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="index.php"><img src="./img/logo/logo1.png" alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">
                        <!-- Menu Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>
                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul id="nav">
                            <li class="active"><a href="./index.php">Home</a></li>
                            <li><a href="room1.php">Rooms</a></li>
                             <li><a href="./about.php">About Us</a></li>                                
                             <li><a href="blog.php">Blog</a></li>
                             <li><a href="./contact.php">Contact</a></li>
                             <li><a href="./review.php">Review</a></li>
                             <li><a href="#"><div class="fa fa-2x fa-user-circle" style="font-size:18px"></div></a>
                                    
                                <ul class="dropdown" aria-labelledby="profileDropdown" aria-expanded="false">
                                    <li>                                  
                                        <div class="dropdown-item">
                                            <section class="profile-container">       
                                                <div class="profile text-center">
                                                  <img src="img/profile.jpeg" alt="Profile" id="profileImage" class="img-fluid rounded-circle" style="width: 90px; height: 90px";>
                                                    <h6><?= htmlspecialchars($fname); ?></h6>
                                                    <h6><?= htmlspecialchars($email); ?></h6>
                                                    <a href="#" class="btn" id="changePhotoBtn">Add Photo</a>
                                                    <input type="file" id="changePhoto" style="display:none;" accept="image/*">                                      
                                                    <div class="flex-btn mt-2">
                                                    <a href="login.php" class="btn">Login</a>
                                                    <a href="cart.php" class="btn">Booked Room</a>
                                                    <a href="logout.php" class="btn">Logout</a>
                                                    </div>
                                                </div>   
                                            </section>
                                        </div>                                        
                                    </li>                                   
                                </ul>
                              </li>
                            </ul>

 
                            <!-- Search -->
                                <!-- <div class="search-btn ml-4">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                            
                                </div> -->

                            <!-- Book Now -->
                            <div class="book-now-btn ml-3 ml-lg-5">
                                <a href="viewreservation.php">Reserved<i class="fa fa-long-arrow" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </div>

<!-- Header Area End -->
<script>
document.getElementById('changePhotoBtn').addEventListener('click', function () {
    document.getElementById('changePhoto').click();
});

document.getElementById('changePhoto').addEventListener('change', function (event) {
    const file = event.target.files[0];

    if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById('profileImage').src = e.target.result;
        }
        reader.readAsDataURL(file);
    }
});
</script>
</header>