
<?php
include 'connection.php'; // Ensure this file connects to your database
session_start();
$query_select = "SELECT * FROM `cart`"; // Fetch all rooms
$query_run = mysqli_query($con, $query_select);
?>

 
 <!-- About Us Area Start -->
    <section class="roberto-about-area section-padding-100-0">
        <!-- Hotel Search Form Area -->
        <div class="hotel-search-form-area">
            <div class="container-fluid">
                <div class="hotel-search-form">
                    <form action="check.php" method="POST" name="Form" onsubmit="return validateForm()">
                        <div class="row justify-content-between align-items-end">
                            <div class="col-6 col-md-2 col-lg-3">
                                <label for="checkIn">Check In</label>
                                <input type="date" class="form-control" id="checkIn" name="checkin">
                            </div>
                            <div class="col-6 col-md-2 col-lg-3">
                                <label for="checkOut">Check Out</label>
                                <input type="date" class="form-control" id="checkOut" name="checkout">
                            </div>
                            <div class="col-4 col-md-2">
                                <label for="room">Rooms</label>
                                <select name="room" id="room" class="form-control">
                                    <option value="01">00</option>
                                    <option value="01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">04</option>
                                    <option value="05">05</option>
                                    <option value="06">06</option>
                                    <option value="07">07</option>
                                    <option value="08">08</option>
                                    <option value="09">09</option>
                                    <option value="10">10</option>
                                </select>
                            </div>
                           
                            <!-- <div class="col-4 col-md-1">
                                <label for="adults">Adult</label>
                                <select name="adults" id="adults" class="form-control">
                                    <option value="01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">04</option>
                                    <option value="05">05</option>
                                </select>
                            </div> -->
                            <!-- <div class="col-4 col-md-2 col-lg-1">
                                <label for="children">Children</label>
                                <select name="children" id="children" class="form-control">
                                    <option value="01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">04</option>
                                    <option value="05">05</option>
                                </select>
                            </div> -->
                            <div class="col-12 col-md-3 ">
                                <button type="submit" name="checkAvailability" class="form-control btn roberto-btn w-100 p-2">Check Availability</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <div class="container mt-100">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6">
                    <!-- Section Heading -->
                    <div class="section-heading wow fadeInUp" data-wow-delay="100ms">
                        <h6>About Us</h6>
                        <h2>Welcome to <br>The Stars Sky Hotel Luxury</h2>
                    </div>
                    <div class="about-us-content mb-100">
                        <h5 class="wow fadeInUp" data-wow-delay="300ms">With over 340 hotels worldwide, NH Hotel Group
                            offers a wide variety of hotels catering for a perfect stay no matter where your
                            destination.</h5>
                        <p class="wow fadeInUp" data-wow-delay="400ms">Manager: <span>Neha Kapoor</span></p>
                        <!-- <img src="img/core-img/signature.png" alt="" class="wow fadeInUp" data-wow-delay="500ms"> -->
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="about-us-thumbnail mb-100 wow fadeInUp" data-wow-delay="700ms">
                        <div class="row no-gutters">
                            <div class="col-6">
                                <div class="single-thumb">
                                    <img src="img/room/living_room.jpg" alt="">
                                </div>
                                <div class="single-thumb">
                                    <img src="img/room/balcony.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="single-thumb">
                                    <img src="img/room/juice.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- About Us Area End -->

   
<script>
    function validateForm() {
        const checkin = new Date(document.getElementById('checkin').value);
        const checkout = new Date(document.getElementById('checkout').value);

        // Date validation
        if (checkout <= checkin) {
            alert('Check-Out-Date must be after Check-In-Date.');
            return false;
        }

        return true;
    }
</script>