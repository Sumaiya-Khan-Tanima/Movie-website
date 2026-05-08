
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(to right, #000000,#8B0000 ); /* Black to Red gradient */
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .registration-form {
            background-color: rgba(0, 0, 0, 0.7);
            padding: 40px;
            border-radius: 15px;
            text-align: center;
            width: 400px;
            box-shadow: 0 0 15px rgba(255, 0, 0, 0.3); /* Red glow */
        }

        .registration-form h2 {
            margin-bottom: 20px;
            color: #ff0000; /* Red text for the heading */
        }

        .registration-form label {
            display: block;
            margin-bottom: 10px;
            color: white;
            text-align: left; /* Align the labels to the left */
        }

        .registration-form input {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 2px solid #ff0000; /* Red border */
            background-color: #1a1a1a;
            color: white;
            border-radius: 8px;
        }

        .registration-form button {
            padding: 12px 30px;
            background-color: #ff0000; /* Red background for the button */
            color: white; /* Changed the button text to white */
            border: none;
            border-radius: 25px;
            cursor: pointer;
            font-size: 16px;
            box-shadow: 0 0 8px #ff0000; /* Red glow */
            transition: 0.3s;
        }

        .registration-form button:hover {
            box-shadow: 0 0 25px #ff0000; /* Stronger red glow on hover */
        }

        /* Styling for the small login button */
        .login-btn {
            margin-top: 10px;
            font-size: 12px;
            color: #ff0000;
            text-decoration: none;
            display: inline-block;
            padding: 10px 20px;
            border: 1px solid #ff0000;
            border-radius: 25px;
            transition: 0.3s;
        }

        .login-btn:hover {
            background-color: #ff0000;
            color: white;
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="registration-form">
            <h2>Register</h2>
            <form action="" method="post"  autocomplete="off" >
                <label for="name">Full Name</label>
                <input type="text" id="name" name="fullname" placeholder="Enter name" required >

                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter Email">

                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter Password">

                <button type="submit" name="register" >Register</button>
            </form>
            <a href="login.php" class="login">Already have an account? Login</a> <!-- Small login button -->
        </div>
    </div>
</body>
</html>

<?php
include "connect.php";

if (isset($_POST["register"])) {
    $fullname=$_POST['fullname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $query="INSERT INTO table1 ( fullname, email, password) VALUES ('$fullname', '$email', '$password');";

    if (mysqli_query ($conn, $query)) {
        header("location:login.php");}

}
else {
#code echo"Not registered";
}
 
?>