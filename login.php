<?php
session_start();
include "connection.php";
$email = isset($_SESSION['email']) ? $_SESSION['email'] : '';

if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
     /* Admin value */
     $e='admin@gmail.com';
     $p='admin';

      /* User value */
    $email = $_POST['email'];
    $password = $_POST['password'];

    /* Admin side login */
    if($email==$e && $password==$p)
      {    
         $_SESSION['name']=$data['$email'];
         $_SESSION['start']=time();
         $_SESSION['expire']=$_SESSION['start']+1000;
         echo "<script>alert('Logged in Successful as admin.'); window.location.href='admin/index.php';</script>";
      }
      /* User side Login*/
    else{
    $qry = "SELECT *FROM registration WHERE email = '$email' AND password='$password'";
    $result = mysqli_query($con , $qry);
    
    if(mysqli_num_rows($result) > 0) {
        $_SESSION['email'] = $email; 
        $_SESSION['name'] = $fname;      
        header('Location: index.php');
        exit();
    } else {
        echo '<script>alert("Invalid Email or Password! Create New Account.");</script>';
    }
}
}
?>

<html>
<head>
    <title>Login page</title>

     <!-- Favicon -->
     <link rel="icon" href="./img/logo/f2.jpg">

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
    border-radius: 15px;
    box-shadow: 0 0 20px #00000033;
    padding: 10px 20px;
    transition: transform 0.2s;
    width:100%;
    max-width: 400px;
    text-align: center;
    box-sizing: border-box;
}
input {
    display: block;
    width: 100%;
    margin-bottom: 15px;
    padding: 10px;
    box-sizing: border-box;
    border: 1px solid #ddd;
    border-radius: 5px;
}

button {
    padding: 15px;
    border-radius: 10px;
    margin-top: 15px;
    margin-bottom: 15px;
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
    background-image: url("./img/slider/bg2.jpg");
    background-size: cover;
    opacity: 0.85;
}
/* Responsive Design */
@media screen and (max-width:600px){
    .form-container{
             width:90%;
             /*max-width: 400px;*/
    }
}


</style>
</head>

<body>
<section class="form-container">     
        
        <form name="f1" action="login.php" method="POST">
        <h1>Log in or Create account</h1>
        <input type="text" name="email" placeholder="Email" required/>
        <input type="password" name="password" placeholder="Password"  required maxlength="10" />
        <div class="btn">
        <button type="submit" name="login" onclick="">Log in</button>
        </div>
        
        <p>New user?<a href="Registration.php"style="text-decoration: none">Create an account </a></p>
        </form>    
    </section>
</body>
</html>