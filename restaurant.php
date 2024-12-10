
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
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Body and font settings */
body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
    color: #333;
    background-color: #f4f4f4;
}

/* Header styles */
.header {   
    opacity: 0.76;
    background-image: url('img/food/image5.jpg');
    background-repeat: no-repeat;
    background-size: cover;  
    padding: 6rem 0;
    text-align: center;
    height: 300px;
}

.header h1 {
    color:white;
    margin-bottom: 0.5rem;
    font-weight: bolder;
    font-size: 50px;
   
}

/* menu section */
.menu{
    padding: 25px 0;
}
.section{
    padding: 25px 0;
    text-align: center;
    font-size: 2rem;
    font-family: verdana;
}
.menu_row{
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    padding: 0 20px;
    
}
.menu_col{
    box-shadow: 2px 2px 2px #bbb;
    border:1px solid #bbb;
    background-color: #fff;
    margin:10px;
    padding: 10px;
    flex:1;
    max-width: calc(33.333% - 20px);
    box-sizing: border-box;
}
.menu_col h2{
    background-color:#1cc3b2;
    color:#fff;
    text-align: center;
    padding: 10px;
    font-family: cursive;
}
.image{
    max-width: 100%;
    height:250px;
    border-radius: 15px;
    padding:7px;
   
}
.image img{
    max-width: 100%;
    height:250px;
    border-radius: 15px;
    object-fit: cover;
}
.box{
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    margin: 5px;
}
h3{
    margin: 5px;
    padding: 5px;
}

/* Responsive adjustments */
@media (max-width: 992px) {
    .menu_col {
        max-width: calc(50% - 20px);
    }
}

@media (max-width: 768px) {
    .menu_col {
        max-width: calc(100% - 20px);
    }

    .menu_row {
        padding: 0 10px;
    }
}


</style>
<body>
<?php include 'header.php'; ?>
    <div class="header">
        <h1>Our Restaurant</h1>
    </div>
    <div class="menu">
        <h1 class="section">Menu</h1>
        <div class="menu_row">
            <div class="menu_col">
                <h2>BreakFast</h2>
                <div class="box">
                    <div class="image">
                        <img src="img/food/bf1.jpg" alt="">
                    </div>
                    <div>
                        <h3>Special Dish</h3>
                        <h4>600&#8377</h4>
                    </div>
                </div>
                <div class="box">
                    <div class="image">
                        <img src="img/food/bf2.jpg" alt="Coffee Latte">
                    </div>
                    <div>
                        <h3>Coffee Latte</h3>
                        <h4>150&#8377</h4>
                    </div>
                </div>
                <div class="box">
                    <div class="image">
                        <img src="img/food/bf3.jpg" alt="Masala french toast">
                    </div>
                    <div>
                        <h3>Masala French Toast</h3>
                        <h4>300&#8377</h4>
                    </div>
                </div>
                <div class="box">
                    <div class="image">
                        <img src="img/food/bf4.jpg" alt="peanut butter">
                    </div>
                    <div>
                        <h3>Pancake</h3>
                        <h4>299&#8377</h4>
                    </div>
                </div>
            </div>
            <div class="menu_col">
                <h2>Lunch</h2>
                <div class="box">
                    <div class="image">
                        <img src="img/food/l1.jpg" alt="">
                    </div>
                    <div>
                        <h3>Paneer Butter Masala</h3>
                        <h4>250&#8377</h4>
                    </div>
                </div>
                <div class="box">
                    <div class="image">
                        <img src="img/food/l2.jpg" alt="">
                    </div>
                    <div>
                        <h3>Flavours of India</h3>
                        <h4>999&#8377</h4>
                    </div>
                </div>
                <div class="box">
                    <div class="image">
                        <img src="img/food/l3.jpg" alt="">
                    </div>
                    <div>
                        <h3>Dal Makhani</h3>
                        <h4>430&#8377</h4>
                    </div>
                </div>
                <div class="box">
                    <div class="image">
                        <img src="img/food/l4.jpg" alt="">
                    </div>
                    <div>
                        <h3>Paneer Sizzler</h3>
                        <h4>899&#8377</h4>
                    </div>
                </div>
            </div>
            <div class="menu_col">
                <h2>Dinner</h2>
                <div class="box">
                    <div class="image">
                        <img src="img/food/d1.jpeg" alt="">
                    </div>
                    <div>
                        <h3>Manchow Soup</h3>
                        <h4>100&#8377</h4>
                    </div>
                </div>
                <div class="box">
                    <div class="image">
                        <img src="img/food/d2.jpg" alt="">
                    </div>
                    <div>
                        <h3>Pizza Extravaganzza</h3>
                        <h4>399&#8377</h4>
                    </div>
                </div>
                <div class="box">
                    <div class="image">
                        <img src="img/food/d3.jpg" alt="">
                    </div>
                    <div>
                        <h3>Beef Burger</h3>
                        <h4>159&#8377</h4>
                    </div>
                </div>
                <div class="box">
                    <div class="image">
                        <img src="img/food/d4.jpg" alt="">
                    </div>
                    <div>
                        <h3>Cheese Burst Dosa</h3>
                        <h4>250&#8377</h4>
                    </div>
                </div>
            </div>
        </div>

    </div>

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