<?php
include('login_u.php');
require('login_m.php'); 
if(isset($_SESSION['login_user2'])){
header("location: foodlist.php"); 
}
else if(isset($_SESSION['login_user1'])){
header("location: view_food_items.php"); //Redirecting to myrestaurant Page
}
?>
<html>
<head>
    <title> Guest Login | Restro </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type = "text/css" href ="css/login.css"> 
    <style>
        .style{
        font-family:"Lucida Handwriting", cursive;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
                <nav class="navbar nav-tabs navbar-expand-lg navbar-light text-center" style="background-color: #e3f2fd;">
                    <a class="navbar-brand style" href="#">Restro</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" >
                        <span class="navbar-toggler-icon"></span>
                    </button>
    
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav navbar-right ms-auto mb-2 mb-lg-0">
                    <li class="nav-item "><a class="nav-link " href="home.php">Home</a></li>
                    <li class="nav-item "><a class="nav-link " href="aboutus.php">About Us</a></li>										
                    <li class="nav-item "><a class="nav-link" href= "contactus.php">Contact</a></li>  
                    <li class="nav-item "><a class="nav-link" href="#" > Login </span></a></li>
              </ul>
            </div>
        </div>
    </div>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="" method="POST">
            <h1>Sign in Manager</h1>
			<input id="username" type="text" name="username" placeholder="Username" />
			<input id="password" type="password" name="password" placeholder="Password" />
			<button name="submit_m" type="submit_m" value=" Login ">Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="" method="POST">
			<h1>Sign in Customer</h1>
			<input id="username" type="text" name="username" placeholder="Username" />
			<input id="password" type="password" name="password" placeholder="Password" />
			<button name="submit_c" type="submit_c" value=" Login ">Sign Up</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>

<script>
    const signUpButton = document.getElementById('signUp');
    const signInButton = document.getElementById('signIn');
    const container = document.getElementById('container');

    signUpButton.addEventListener('click', () => {
        container.classList.add("right-panel-active");
    });

    signInButton.addEventListener('click', () => {
        container.classList.remove("right-panel-active");
    });
</script>
</body>
</html>