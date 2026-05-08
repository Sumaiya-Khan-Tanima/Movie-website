<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(to right, #000000, #8B0000); /* Black to Red gradient */
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-form {
            background-color: rgba(0, 0, 0, 0.7);
            padding: 40px;
            border-radius: 15px;
            text-align: center;
            width: 350px;
            box-shadow: 0 0 15px rgba(255, 0, 0, 0.3); /* Red glow */
        }

        .login-form h2 {
            margin-bottom: 20px;
            color: #ff0000; /* Red text for the heading */
        }

        .login-form label {
            display: block;
            margin-bottom: 10px;
            color: white;
            text-align: left; /* Align the labels to the left */
        }

        .login-form input {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 2px solid #ff0000; /* Red border */
            background-color: #1a1a1a;
            color: white;
            border-radius: 8px;
        }

        .login-form button {
            padding: 12px 30px;
            background-color: #ff0000; /* Red background for the button */
            color: white;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            font-size: 16px;
            box-shadow: 0 0 8px #ff0000; /* Red glow */
            transition: 0.3s;
        }

        .login-form button:hover {
            box-shadow: 0 0 25px #ff0000; /* Stronger red glow on hover */
        }

        /* Styling for the small register button */
        .register-btn {
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

        .register-btn:hover {
            background-color: #ff0000;
            color: white;
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="login-form">
            <h2>Login</h2>
            <form method="POST">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Enter Username">

                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter Password">

                <button type="submit" name="login">Login</button>
            </form>
            <a href="register.php" class="register">Don't have an account? Register</a> <!-- Small register button -->
        </div>
    </div>
</body>
</html>

<?php

require "connect.php";
if(isset($_POST["login"]))
  {
    $username=$_POST['username'];
    $password=$_POST['password'];

    $query="SELECT * FROM table1 WHERE fullname = '$username' AND password = '$password'";

    $result=mysqli_query($conn, $query) ;
    if(mysqli_num_rows($result)>0){
       
        session_start();
    
        $_SESSION['AdminLoginId']=$_POST['dmihnName'];
       
        header("location: new index.html");
    }
    
else
 {echo "<script>alert('incorrect pass');</script>";}



  }



?>

  