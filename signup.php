<!DOCTYPE html>
<html>
<head>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <title>HAVEN-SIGNUP</title>
        <meta charset="utf-8">
        <meta name="description" content="haven">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Team Haven">
        <meta name="generator" content="Welcome to team Haven">
</head>
<body>
    <div class="container">
    <div class="form-Container">
    <header>Sign Up</header>
    <form action="welcomeSignup.php" method="post">
        <label>First Name</label><br><br>
        <input type="text" name="fname" placeholder="Enter First Name" required class="inputs" id="firstname"><br><br>
        <label>Last Name</label><br><br>
        <input type="text" name="lname" placeholder="Enter Last Name" required class="inputs"><br><br>
        <label>email</label><br><br>
        <input type="email" name="email" placeholder="example@gmail.com" required class="inputs" id="email"><br><br>
        <label>password</label><br><br>
        <input type="PASSWORD" name="password" placeholder="*********" required class="inputs"><br><br>
        <label>repeat password</label><br><br>
        <input type="PASSWORD" name="rpassword" placeholder="*********" required class="inputs"><br><br>
        <div class="checkbox-and-forgotpassword">
            <div>
                
                <input type="checkbox" name="rememberMe"><label id="checkboxLabel">remember me</label>
            </div>
            <div class="forgotpassword">
                <a href="#">forgot password<a>
            </div>
        </div>
        <div class="container-for-submitbutton-and-loginbuton">
            <div>
                
                <button type="submit" name="Create Account" value="sign up" class="sign-up">Create Account</button>
            </div>
        </div>
    </form>
        <h4>have an account?<span>&nbsp;<a href="index.php" class="h4">Login here</span></a></h4></span></a></h4>
    </div>
        <div class="container-welcomeToHaven">
                <h1>welcome to haven</h1>
                <div>
                    <img src="images/loginpage.png" alt="loginImage1" class="imagepng">
                </div>
            </div>
    </div>
</body>
</html>