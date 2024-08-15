<?php
session_start();


$db = mysqli_connect("localhost", "root", "", "base1");

if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);   
    $password = mysqli_real_escape_string($db, $_POST['password']);   
    $password2 = mysqli_real_escape_string($db, $_POST['conformpassword']);

    if ($password == $password2) {
        $password = md5($password);    
        $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
        mysqli_query($db, $sql);

        $_SESSION['message'] = "You are now logged in";
        $_SESSION['username'] = $username;
        header("Location: login.php"); 
        exit();
    } else {
        $_SESSION['message'] = "The two passwords do not match";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width", initial-scale="1.0">
        <title>SIGN UP</title>
        <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        body{
            background-color: #121212;
            color: #e6e6e6;
        }
        .contion{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 90vh;
        }
        .h{
            background-color: #1e1e1e;
            display: flex;
            flex-direction: column;
            padding: 25px 25px;
            border-radius: 20px;
            box-shadow: 0 0 128px 0 rgba(0,0,0,0.5);
            color: #e6e6e6;
        }
        .h{
            width: 450px;
            margin: 0px 10px;
        }
        .h{
            font-size: 25px;
            font-weight: 600;
            padding-bottom: 10px;
            border-bottom: 1px solid #333333;
        }
        .h.field{
            display: flex;
            flex-direction: column;
            margin-bottom: 10px;
        }
        .h .input input {
            height: 40px;
            width:100%;
            font-size: 12px;
            padding: 0 10px;
            border-radius: 5px;
            border: 1px solid #333333;
            background-color: #333333;
            color: #e6e6e6;
            outline: none;
        }
        .btn{
            height: 40px;
            background-color: #3742fa;
            text-align: center;
            border: 0;
            color: #e6e6e6;
            border-radius: 5px;
            font-size: 15px;
            outline: none;
            cursor: pointer;
            transition: all .3s;
            margin-top: 10px;
            padding: 0px 10px;
        }
        .btn:hover{
            opacity: 0.82;
        }
        .submit{
            width: 100%;
        }
        .link{
            margin-bottom: 15px;
            color: #e6e6e6;
        }
        .link a {
            color: #74b9ff;
            text-decoration: none;
        }
        .link a:hover {
            text-decoration: underline;
        }

        </style>
    </head>
    <body>
        <div class="contion">
            <h1>SIGN UP</h1>
            <form action="login.php" method="post">
                <div class="h">
                    <div class="field input">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" autocomplete="off" required>
                    </div>
                    <div class="field input">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" autocomplete="off" required>
                    </div>
                    
                    <div class="field input">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" autocomplete="off" required>
                    </div>
                    <div class="field input">
                        <label for="conformpassword">Confirm Password</label>
                        <input type="password" name="conformpassword" id="conformpassword" autocomplete="off" required>
                    </div>
                    
                    <div class="field">
                        <input type="submit" class="btn" name="submit" value="Sign Up">
                    </div>
                    <div class="link">
                       Already a member? <a href="index.php">Sign In</a>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>
