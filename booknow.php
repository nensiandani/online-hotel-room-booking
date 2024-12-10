<?php
include "connection.php";
session_start();
$fname = isset($_SESSION['name']) ? $_SESSION['name'] : ''; 
$email = isset($_SESSION['email']) ? $_SESSION['email'] : '';
$user = $_SESSION['email'];

if (!isset($_SESSION['email'])) {
    header('Location: login.php');
    exit(); 
}

$select_cart = mysqli_query($con, "SELECT * FROM `cart` where user='$user'");
       $grand_total = 0;
       $room_count = 0;
       if (mysqli_num_rows($select_cart) > 0) {
            while ($row = mysqli_fetch_assoc($select_cart)) {
                $subtotal = $row['total'];
                $grand_total += $subtotal; //addition assignment opertor
                $room_count++;
            }
        }

if (isset($_POST['submit'])) {
    
    $name =  $_POST['name'];
    $email =  $_POST['email'];
    $mb =  $_POST['mobileno'];
    $pay =  $_POST['payment'];
    $conu =  $_POST['country'];
    $tot_rm= $_POST['total_room'];
    $cin =  $_POST['checkin'];
    $cout =  $_POST['checkout'];

            // Calculate the number of days between check-in and check-out
            $checkin_date = new DateTime($cin);
            $checkout_date = new DateTime($cout);
            $interval = $checkin_date->diff($checkout_date);
            $daysDiff = $interval->days;
        
            // Calculate total price
            if ($daysDiff > 0) {
                $totalPrice = $daysDiff * $grand_total; // total price for stay
            } else {
                $totalPrice = 0; // Invalid if checkout is before or the same as check-in
                echo "<script>alert('Check-Out-Date must be after Check-In-Date.');</script>";
            }
    
   
    $qry = "INSERT INTO booking (firstname, email, mobileno, payment, country,total_room, checkin, checkout,total_price) VALUES ('$name', '$email', '$mb', '$pay', '$conu','$tot_rm', '$cin', '$cout','$totalPrice')";
    $data=mysqli_query($con,$qry);
    if ($data){
        echo '<script>alert("Your Booking Done! Thank you.😊😊");window.location.href = "viewreservation.php";</script>';
    }
    else{
        echo '<script>alert("Your Booking Not Done! Please Try Again.");window.location.href = "booknow.php";</script>';
    }
}

// Close the database connection
mysqli_close($con);
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
<style>
    body {
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: sans-serif;
        line-height: 1.5;
        min-height: 100vh;
        background: #f3f3f3;
        flex-direction: column;
        margin: 0;
        padding: 10px;
    }

    .form-container {
        background-color: #fff;
        border-radius: 0.6rem;
        box-shadow: 0 0 20px #00000033;
        padding: 10px 20px;
        margin: 8px;
        transition: transform 0.2s;
        width: 100%;
        max-width: 450px;
        box-sizing: border-box;
    }

    label {
        padding: 3px;
        font-weight: bold;
    }

    .select {
        font-weight: bold;
        padding: 5px;
        border-radius: 8px;
    }

    input {
        display: block;
        width: 100%;
        margin-bottom: 12px;
        padding: 6px;
        box-sizing: border-box;
        border: 1px solid #ddd;
        border-radius: 5px;
        font-size: 15px;
    }

    button {
        padding: 10px;
        border-radius: 10px;
        margin-top: 10px;
        margin-bottom: 10px;
        border: none;
        color: white;
        cursor: pointer;
        background-color: hwb(217 30% 31%);
        width: 100%;
        font-size: 16px;
    }

    button:hover {
        background-color: hwb(217 20% 21%);
    }

    body {
        background-image: url("./img/slider/bg5.jpg");
        background-size: cover;
        opacity: 0.9;
    }

    /* Responsive Design */
    @media screen and (max-width:600px) {
        .form-container {
            width: 90%;
            /*max-width: 400px;*/
        }
    }
</style>
<body>
    
    <section class="form-container">
        <form action="" method="POST" name="Form" onsubmit="return validateForm()">

            <h1>BOOK YOUR ROOM</h1>
            <label for="name"><b>Full Name</b></label>
            <input type="text" id="firstname" name="name"  placeholder="Enter Your Name"  required/>

            <label for="email"><b>Email</b></label>
            <input type="email" id="email"  name="email" value="<?php echo $email; ?>" readonly required />

            <label for="number"><b>Mobile No</b></label>
            <input type="tel" id="number" placeholder="Enter Mobile No" name="mobileno" required maxlength="10" />
            
            <label for="country">Country</label>
            <input type="text" id="country" name="country" placeholder="Enter Country name" required pattern="[A-Za-z\s]+" title="Name must contain only letters and spaces" />

            <label for="total room">Total Room</label>
            <input type="text" id="total_room" name="total_room" value="<?php echo $room_count; ?>"  readonly/>

            <label for="checkin"><b>Check-In-Date</b></label>
            <input type="date" id="checkin" name="checkin" required />

            <label for="checkout"><b>Check-Out-Date</b></label>
            <input type="date" id="checkout" name="checkout" required />
            
            <!-- <label for="Total-price"><b>Total price</b></label> -->
            <input type="hidden" id="total_price" name="total_price" value="<?php echo $totalprice; ?>"  required readonly/>
            
            <label for="payment">PayMent</label>
            <select id="payment" class="select" name="payment" required />
            <option value="UPI">UPI</option>
            <option value="Cash Payment">Cash Payment</option>
            <option value="Debit/Credit Card">Debit/Credit Card</option>
            <option value="Net Banking">Net Banking</option>
            </select><br>
            
            <button type='submit' name="submit">Book Now</button>
        </form>
        </div>
    </section>
    
</body>

<script>
    function validateForm() {
        
        const email = document.getElementById('email').value.trim();
        const mobileNo = document.getElementById('number').value.trim();
        const country = document.getElementById('country').value.trim();
        const checkin = new Date(document.getElementById('checkin').value);
        const checkout = new Date(document.getElementById('checkout').value);

    
        // Email validation
        const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        if (!emailPattern.test(email)) {
            alert('Please enter a valid email address.');
            return false;
        }

        // Mobile number validation
        const mobilePattern = /^[56789][0-9]{9}$/;
        if (!mobilePattern.test(mobileNo)) {
            alert('Mobile number must start with 5,6,7, 8, or 9 and be exactly 10 digits long.');
            return false;
        }
        // Country validation
        if (country.length < 2) {
            alert('Country name must be at least 2 characters long.');
            return false;
        }
        // Date validation
        if (checkout <= checkin) {
            alert('Check-Out-Date must be after Check-In-Date.');
            return false;
        }

        return true;
    }
</script>
</html>

