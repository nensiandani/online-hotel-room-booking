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
<style>

    /* Reset and base styles */
*,
*::before,
*::after {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

body {
    font-family: 'Arial', sans-serif;
    line-height: 1.6;
    background-color: #f8f8f8;
    color: #333;
}

img {
    max-width: 100%;
    display: block;
}

/* Header styles */
.header {
    background-image: url("img/room/Tm1.jpg");
    opacity: 0.7;
    background-repeat: no-repeat;
    background-size: cover;    
    padding: 5rem;
    margin-bottom: 30px;
    text-align: center;
    height: 300px;    
}

.header__title {
    font-size: 2rem;
    margin: 25px;
    font-weight:300px;
    color:#FFFFFF; 
}


/* Hero section styles */
.hero {
    display: flex;
    justify-content: center;
    align-items: center;
    overflow: hidden;
    margin-top: 2rem;
}

.hero__image-container {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: 400px; /* Adjust the height as needed */
    padding: 2rem; /* Added padding to create space around the image */
    margin-bottom: 2rem; 
}

.hero__image {
    max-width: 100%;
    height: auto;
    object-fit: cover;
    padding: 1rem;
    margin-bottom: 1rem;
}

/* Intro section styles */
.intro {
    margin: 40px;
    text-align: center;
    padding: 2rem 1rem;
    background-color: #fff;
}

.section__title {
    font-size: 2rem;
    margin-bottom: 2rem;
    color: #1FA196;
}

.section__text {
    font-size: 1.1rem;
    max-width: 800px;
    margin: 20px auto;
    font-weight:bold;
    line-height: 1.8;
}

/* Services section styles */
.services {
    background-color: #f0f0f0;
    padding: 2rem 1rem;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 1rem;
}

.services__grid {
    display: flex;
    flex-wrap: wrap;
    gap: 1rem;
    justify-content: space-between;
}

.service {
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    flex: 1 1 calc(33.333% - 1rem);
    padding: 1rem;
    text-align: center;
}

.service__image {
    border-radius: 8px;
    margin-bottom: 1rem;
}

.service__title {
    font-size: 1.25rem;
    margin-bottom: 0.5rem;
    color: #4CAF50;
}

.service__text {
    font-size: 1rem;
    line-height: 1.8;
    font-weight:bold;
}

/* Responsive styles */
@media (max-width: 768px) {
    .services__grid {
        flex-direction: column;
    }

    .service {
        flex: 1 1 100%;
        margin-bottom: 1rem;
    }
}

</style>
<body>
<?php
        include "header.php";
?>

    <header class="header">
        <div class="container">
            <h1 class="header__title">Welcome to Transportation Services</h1>
        </div>
    </header>
    
    <main>
        <section class="hero">
            <div class="hero__image-container">
                <img src="img/room/Tm2.jpg" alt="Transportation">
            </div>
        </section>

        <section class="intro">
            <div class="container">
                <h2 class="section__title">About Us</h2>
                <p class="section__text">Our hotel offers a premier transportation
                 service designed to ensure a seamless and luxurious travel experience
                for our guests. Whether you need an airport transfer, a ride to a local 
                attraction, or a business meeting, our fleet of well-maintained vehicles and
                professional drivers are at your service. We prioritize your comfort and safety,
                offering a range of transport options from executive sedans to spacious vans. With our
                transportation service, you can enjoy the convenience of timely pickups, knowledgeable drivers familiar with 
             the area, and the ease of door-to-door service. Let us take care of your travel needs, so you can focus on enjoying your stay.       
            </div>
        </section>

        <section class="services">
            <div class="container">
                <h2 class="section__title">Our Services</h2>
                <div class="services__grid">
                <div class="service">
                        <img src="img/room/car.jpg" alt="Car" class="service__image">
                        <h3 class="service__title">Car rentals</h>
                    </div>
                    <div class="service">
                        <img src="img/room/bus2.jpg" alt="Bus" class="service__image">
                        <h3 class="service__title">Buses</h3>
                    </div>
                    <div class="service">
                        <img src="img/room/Train.jpg" alt="Train" class="service__image">
                        <h3 class="service__title">Train</h3>
                    </div>
                    <div class="service">
                        <img src="img/room/T1.jpeg" alt="Somnath Temple" class="service__image">
                        <h3 class="service__title">Somnath Temple</h3>
                        <p class="service__text">Ahemdabad &#8594 Somnath Temple<br>2500&#8377</p>
                    </div>
                    <div class="service">
                        <img src="img/room/T2.jpeg" alt="Mandvi Beach" class="service__image">
                        <h3 class="service__title">Mandvi Beach</h3>
                        <p class="service__text">Ahemdabad &#8594 Mandvi Beach<br>3500&#8377</p>
                    </div>
                    <div class="service">
                        <img src="img/room/T3.jpeg" alt="Sun Temple" class="service__image">
                        <h3 class="service__title">Sun Temple</h3>
                        <p class="service__text">Ahemdabad &#8594 Sun Temple<br>1000&#8377</p>
                    </div>
                    <div class="service">
                        <img src="img/room/T4.jpeg" alt="Runn of Kutchh" class="service__image">
                        <h3 class="service__title">Runn of Kutchh</h3>
                        <p class="service__text">Ahemdabad &#8594 Runn of Kutchh<br>3500&#8377</p>
                    </div>
                    <div class="service">
                        <img src="img/room/T5.jpeg" alt="Rani ki Vaav" class="service__image">
                        <h3 class="service__title">Rani ki Vaav</h3>
                        <p class="service__text">Ahemdabad &#8594 Rani Ki Vaav<br>1000&#8377</p>
                    </div>
                    <div class="service">
                        <img src="img/room/T6.jpeg" alt="Gomti River" class="service__image">
                        <h3 class="service__title">Gomti River</h3>
                        <p class="service__text">Ahemdabad &#8594 Gomti River<br>4000&#8377</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

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

<?php include 'footer.php'; ?>