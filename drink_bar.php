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
    background-image: url("img/food/bg2.jpg");
    opacity: 0.65;
    background-repeat: no-repeat;
    background-size: cover;    
    height: 300px;
    padding: 5rem;
    margin-bottom: 30px;
    text-align: center;  
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

    <?php   include "header.php";  ?>

    <header class="header">
        <div class="container">
            <h1 class="header__title">Welcome to Bar & Drink</h1>
        </div>
    </header>
    
    <main>
        <section class="hero">
            <div class="hero__image-container">
                <img src="img/food/bg1.jpeg" alt="Drinks">
            </div>
        </section>

        <section class="intro">
            <div class="container">
                <h2 class="section__title">About Us</h2>
                <p class="section__text">
                At our hotel, we take pride in offering an exceptional bar and drink service that caters to the
                 diverse tastes of our guests. Our well-stocked bar features a wide selection of premium spirits, 
                 wines, and craft beers, carefully curated to provide a delightful experience for every palate. Our 
                 skilled bartenders are passionate about mixology and are eager to craft signature cocktails that 
                 reflect both classic favorites and innovative new creations. Whether you're enjoying a refreshing 
                 drink by the pool, indulging in a nightcap at our elegant lounge, or attending a special event, our 
                 team is dedicated to delivering top-notch service with a warm and welcoming ambiance. We strive to 
                 create a memorable and enjoyable atmosphere where guests can unwind and savor every moment.
                    </p>
            </div>
        </section>

        <section class="services">
            <div class="container">
                <h2 class="section__title">Our Services</h2>
                <div class="services__grid">
                    <div class="service">
                        <img src="img/food/db1.jpeg" alt="Red Velvet or Orange Crush" class="service__image">
                        <h3 class="service__title">Red Velvet or Orange Crush</h3>
                        <p class="service__text">1000 &#8377</p>
                    </div>
                    <div class="service">
                        <img src="img/food/db2.jpeg" alt="Strawberry Mojito" class="service__image">
                        <h3 class="service__title">Strawberry Mojito</h3>
                        <p class="service__text">1500 &#8377</p>
                    </div>
                    <div class="service">
                        <img src="img/food/db3.jpg" alt="Cocktails" class="service__image">
                        <h3 class="service__title">Cocktails</h3>
                        <p class="service__text">2500 &#8377</p>
                    </div>
                    <div class="service">
                        <img src="img/food/db4.jpeg" alt="Rose Wine" class="service__image">
                        <h3 class="service__title">Rose Wine</h3>
                        <p class="service__text">2000 &#8377</p>
                    </div>
                    <div class="service">
                        <img src="img/food/db5.jpeg" alt="Champagne" class="service__image">
                        <h3 class="service__title">Champagne</h3>
                        <p class="service__text">3000 &#8377</p>
                    </div>
                    <div class="service">
                        <img src="img/food/db6.jpeg" alt="Wine" class="service__image">
                        <h3 class="service__title">Wine</h3>
                        <p class="service__text">2500 &#8377</p>
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