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
    session_start();
    include 'connection.php';
    if (isset($_GET['deleteall'])) {
        $delete_id = $_GET['deleteall'];
        $delete_query = mysqli_query($con, "DELETE FROM `booking` WHERE id= '$delete_id' ") or die('query failed');
        if ($delete_query) {
            header('location:viewreservation.php');
            $message[] = 'product has been deleted';
        } else {
            header('location:viewreservation.php');
            $message[] = 'product could not be deleted';
        };
    };

    if ($_SESSION["email"]) {
        $C = ($_SESSION["email"]);

    ?>
</head>

<body>

    <!-- Navbar & Hero Start -->
    <?php
        include 'header.php';
    ?>


      <!-- Breadcrumb Area Start -->
      <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/16.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <h2 class="page-title">Your Reservation</h2>
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

        <section class="restaurants-page">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                    </div>
                    <div class="col-xs-12">
                        <div class="m-5">
                            <div class="row">
                                <table class="table table-bordered table-hover" style="text-align: center">
                                    <thead style="background: #404040; color:white;">
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Mobile No</th>
                                            <th>Country</th>
                                            <th>Total Room</th>
                                            <th>Check-In</th>
                                            <th>Check-out</th>
                                            <th>Total Price</th>
                                            <th>Payment</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php  
                                        $query_res = mysqli_query($con, "select * from booking WHERE email='$C'");
                                        $show = mysqli_num_rows($query_res);
                                        if (!$show) {
                                            echo "<a href='booking.php'><h1 style='text-align: center' class='display-3 mb-3 animated slideInDown'>Place Your Reservations</h1></a>";
                                        } else {
                                            foreach ($query_res as $row) {
                                        ?>
                                                <tr>
                                                    <td data-column="Item"> <?php echo $row['firstname']; ?></td>
                                                    <td data-column="Quantity"> <?php echo $row['email']; ?></td>
                                                    <td data-column="price"><?php echo $row['mobileno']; ?></td>
                                                    <td data-column="price"><?php echo $row['country']; ?></td>
                                                    <td data-column="price"><?php echo $row['total_room']; ?></td>
                                                    <td data-column="price"><?php echo $row['checkin']; ?></td>
                                                    <td data-column="price"><?php echo $row['checkout']; ?></td>
                                                    <td data-column="price"><?php echo $row['total_price']; ?></td>
                                                    <td data-column="price"><?php echo $row['payment']; ?></td>
                                                    <td data-column="Action"> <a href="viewreservation.php?deleteall=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to cancel your reservation?');" class="btn btn-danger btn-flat btn-addon btn-xs m-b-10"><i class="fa fa-trash-o" style="font-size:16px"></i>CANCEL</a>
                                                    </td>
                                                </tr>
                                        <?php }
                                        } ?>
                                    </tbody>
                                </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </section>
    <div>
        <br />
        <h5 style="text-align:center"><i><u>Currently to make any changes to your reservations.</u></i></h5>
    </div>


<?php
    } else {
        echo "<script>alert('Sign in to proceed'); window.location.href='login.php';</script>";
    }
?>

<?php
   include 'footer.php';
?>

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

