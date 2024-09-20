<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Signup</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background: linear-gradient(45deg, #9a9fcf, #2d314f);
        }
        .container {
            width: 900px;
            height: 500px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
            display: flex;
            overflow: hidden;
        }
        .signin-panel, .signup-panel {
            flex: 1;
            padding: 50px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .signin-panel {
            background-color: #f8f9fa;
        }
        .signup-panel {
            background-color: #6c63ff;
            color: white;
            text-align: center;
        }
        .signin-panel h2, .signup-panel h2 {
            margin-bottom: 20px;
        }
        .signin-panel input, .signup-panel input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .signin-panel button, .signup-panel button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #6c63ff;
            color: white;
            cursor: pointer;
        }
        .signin-panel .social-icons {
            display: flex;
            justify-content: space-between;
            margin: 20px 0;
        }
        .signin-panel .social-icons a {
            width: 40px;
            height: 40px;
            display: inline-block;
            text-align: center;
            line-height: 40px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 50%;
            color: #333;
            font-size: 18px;
        }
        .signup-panel button {
            background-color: #fff;
            color: #6c63ff;
            margin-top: 30px;
        }
    </style>
</head>
<body>

<div class="container">
    <!-- Sign In Panel -->
    <div class="signin-panel">
        <h2>Sign In</h2>
        <div class="social-icons">
            <a href="#"><i class="fab fa-google"></i></a>
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-linkedin"></i></a>
        </div>
        <p>or use your email account</p>
        <form action="">
            <input type="email" placeholder="Email">
            <input type="password" placeholder="Password">
            <p><a href="#">Forgot your password?</a></p>
            <button type="submit">Sign In</button>
        </form>
    </div>

    <!-- Sign Up Panel -->
    <div class="signup-panel">
        <h2>Hello, Friend!</h2>
        <p>Register with your personal details to use all of our features</p>
        <button type="button">Sign Up</button>
    </div>
</div>

</body>
</html>
