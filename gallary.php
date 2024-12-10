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
    
body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f8f9fa;
}

.head {
    background-image: url('img/room/bc.jpg');
    opacity: 0.72;
    background-repeat: no-repeat;
    background-size: cover; 
    height: 300px;
    text-align: center;
    padding: 6rem 0;
    margin-bottom: 20px;
}

.head h1 {
    margin: 24px;
    font-size: 2.5em;
    letter-spacing: 1px;
    color: white;
}
.items{
    margin: 25px;
    display: grid;
    grid-template-columns: repeat(3,1fr);
    padding: 30px 20px;
    gap: 20px;
}
.item img{
    width: 100%;
    height: 300px;
    object-fit: cover;
    cursor: pointer;
    transition: 0.5s ease;
    border-radius: 6px;
}
.item img:hover{
    transform: scale(1.04);
    
}
/* Responsive adjustments */
@media (max-width: 1200px) {
    .items {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 768px) {
    .items {
        grid-template-columns: repeat(1, 1fr);
    }

    h1 {
        font-size: 2em;
    }
}

@media (max-width: 480px) {
    header {
        padding: 15px 0;
    }

    h1 {
        font-size: 1.5em;
    }

    .items {
        padding: 20px 10px;
    }

    .item img {
        height: 200px;
    }
}

</style>

<body>

<?php include 'header.php'; ?>
    <div class="head">
        <h1>Image Gallery</h1>
    </div>
   <section class="items">
    <div class="item">
        <img src="img/room/g1.jpg" alt="">
    </div>
    <div class="item">
        <img src="img/room/g2.jpg" alt="">
    </div>
    <div class="item">
        <img src="img/room/g3.jpg" alt="">
    </div>
    <div class="item">
        <img src="img/room/g4.jpg" alt="">
    </div>
    <div class="item">
        <img src="img/room/g5.jpg" alt="">
    </div>
    <div class="item">
        <img src="img/room/g6.jpg" alt="">
    </div>
    <div class="item">
        <img src="img/room/g7.jpg" alt="">
    </div>
    <div class="item">
        <img src="img/room/g8.jpg" alt="">
    </div>
   </section>

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