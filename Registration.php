<?php
session_start();
include("connection.php");
            

if (isset($_POST['continue'])) {

    $firstname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $email = $_POST['email'];
    $pswd = $_POST['password'];
    $cpswd = $_POST['confirmpassword'];
    
    $qry = "select *from registration where email='$email' and password='$pswd'";
    $result = mysqli_query($con, $qry);
    $num = mysqli_num_rows($result);

    if ($num > 0) 
    {
        echo '<script>alert("User Already Exist! Please login");window.location.href = "login.php";</script>';
    } 
    else 
    {
        //validation in password
        if ($pswd === $cpswd) {
            $qry = "INSERT INTO registration (firstname, lastname, email, password) VALUES ('$firstname', '$lname', '$email', '$pswd')";
            $result = mysqli_query($con, $qry);

            // Store the first name and email in session variables
            $_SESSION['firstname'] = $firstname;
            $_SESSION['email'] = $email;
           
            echo '<script>alert("Registration successful! Thank you for Register with us.💐🎀");</script>';
            echo '<script>setTimeout(function(){window.location.href = "login.php"; }, 1000);</script>';
            exit();
            // header('location:login.php');
        } 
        else 
        {
            echo '<script>alert("Invalid");</script>';
        }
    }
}
?>

<html>

<head>

    <!-- Favicon -->
    <link rel="icon" href="./img/logo/f2.jpg">

    <title>Registration page</title>
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
            ;
            box-shadow: 0 0 20px #00000033;
            padding: 10px 20px;
            margin: 8px;
            transition: transform 0.2s;
            width: 100%;
            text-align: center;
            max-width: 450px;
            box-sizing: border-box;
        }

        input {
            display: block;
            width: 100%;
            margin-bottom: 15px;
            padding: 8px;
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
            background-image: url("./img/slider/bg4.jpg");
            background-size: cover;
            opacity: 0.85;
        }

        /* Responsive Design */
        @media screen and (max-width:600px) {
            .form-container {
                width: 90%;
                /*max-width: 400px;*/
            }
        }
    </style>
</head>

<body>

    <section class="form-container">

        <form action="Registration.php" method="POST" onsubmit="return validateForm()">
            <h1>Create account</h1>
            <input type="text" id="firstname" name="firstname" placeholder="Firstname" required pattern="[A-Za-z\s]+" title="Name must contain only letters and spaces" />
            <input type="text" id="lastname" name="lastname" placeholder="Lastname" required pattern="[A-Za-z\s]+" title="Name must contain only letters and spaces" />
            <input type="email" id="email" name="email" placeholder="Email" required />
            <input type="password" id="password" name="password" placeholder="Password" required maxlength="10"/>
            <input type="password" id="confirmpassword" name="confirmpassword" placeholder="Confirm Password" required />
            <!-- <input type="file" name="image" class="box" accept="image/jpg, image/png, image/jpeg" required /> -->
            <button type="submit" name="continue" onclick=" ">Continue</button>
            <p>Existing User? <a href="login.php" style="text-decoration: none">Login</a></p>
        </form>
    </section>



</body>
<script>
    function validateForm() {
        const firstname = document.getElementById('firstname').value.trim();
        const lastname = document.getElementById('lastname').value.trim();
        const email = document.getElementById('email').value.trim();
        const password = document.getElementById('password').value;
        const confirmpassword = document.getElementById('confirmpassword').value;


        // Validate Email
        const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        if (!emailPattern.test(email)) {
            alert('Please enter a valid email address.');
            return false;
        }

        // Validate Password
        // if (password.length < 8) {
        //     alert('Password must be at least 8 characters long.');
        //     return false;
        // }
        // return true; // All validations passed
    }
</script>

</html>