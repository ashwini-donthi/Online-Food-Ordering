<?php
session_start();

if(!isset($_SESSION['login_user2'])){
header("location: customerlogin.php"); 
}

?>


<html>
<head>
  <title> Explore </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    
	body
	{
	  background-image: url('bb1.jpeg');
	  background-repeat: no-repeat;
	  background-attachment: fixed;
	  background-size: cover;
	}
	img {
		border-radius: 50%;
	}
    .style{
      font-family:"Lucida Handwriting", cursive;
    }
    .hide {
    display: none;
    }    
    .myDIV:hover + .hide {
      display: block;
      color: red;
    }
    .mydiv:hover + .hide {
      display: block;
      color: red;
    }
    .center1 {
  display: block;
  margin-left: auto;
  margin-right: auto;  
}
.title {
  text-align: center;
  margin-bottom: 2rem;
}
.underline {
  width: 5rem;
  height: 0.25rem;
  background: #c59d5f;;
  margin-left: 5px;
  margin-right: 5px;
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
					  <li class="nav-item "><a class="nav-link " href= "contactus.php">Contact</a></li>
          
             <?php
if(isset($_SESSION['login_user1'])){

?>


          <ul class="nav navbar-nav navbar-right">
            <li class="nav-item "><a class="nav-link " href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user1']; ?> </a></li>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav navbar-right ms-auto mb-2 mb-lg-0">
                    <li class="nav-item "><a class="nav-link " href="home.php">Home</a></li>
                    <li class="nav-item "><a class="nav-link " href="aboutus.php">About Us</a></li>										
                    <li class="nav-item "><a class="nav-link" href= "contactus.php">Contact</a></li>  
                    <li class="nav-item "><a class="nav-link" href="#" > Login </span></a></li>
              </ul>
            </div>
            <li class="nav-item "><a class="nav-link " href="logout_m.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
<?php
}
else if (isset($_SESSION['login_user2'])) {
  ?>
           <ul class="nav navbar-nav navbar-right">
            <li class="nav-item "><a class="nav-link " href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user2']; ?> </a></li>
            <li class="nav-item active"><a class="nav-link active"  href="foodlist.php"><span class="glyphicon glyphicon-cutlery"></span> Food Zone<span class="sr-only">(current)</span>  </a></li>
            <li class="nav-item "><a class="nav-link "href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart 
            (<?php
              if(isset($_SESSION["cart"])){
              $count = count($_SESSION["cart"]); 
              echo "$count"; 
            }
              else
                echo "0";
              ?>)
            </a></li>
            <li class="nav-item "><a class="nav-link " href="customerlogin.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
  <?php        
}
else {

  ?>

<ul class="nav navbar-nav navbar-right">
  <li class="nav-item "><a class="nav-link " href="customerlogin.php" >Login </a></li>
</ul>

<?php
}
?>
          </ul>	
				  </div>
			</nav>
	</div>
</div>

 <br>   


<div class="container" style="width:95%;">
<div class="container">
			<div class="row">
				<div class="col-12 col-sm-7 col-md-7 col-lg-7 col-xl-7 "></div>
				<div class= "col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4 "><br>
         <h1>Our Menu</h1>
         <div class="underline"></div>
        </div>
      </div>
			<div class="row">
				<div class= "col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 "> </div>
				<div class= "col-12 col-sm-6 col-md-3 col-lg-3 col-xl-3"> 
					<a href="food1.php" class="btn "><img src="starter.jpg" alt="Starter" height="120px" width="120px" ></a>
					<h2>Starters</h2>		
				</div>
				<div class= "col-12 col-sm-6 col-md-3 col-lg-3 col-xl-3"> 
					<a href="biryani.php" class="btn "><img src="paneer_biryani.jpg" alt="biryani" height="120px" width="120px" ></a>
					<h2>Biryani</h2>		
				</div>
			</div>
			<br>
			<div class="row">
				<div class= "col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 "> </div>
				<div class= "col-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 "> 
					<a href="noodles.php" class="btn "><img src="veg_noodles.jpg" alt="Starter" height="120px" width="120px" ></a>
					<h2>Noodles</h2>				
				</div>
				<div class= "col-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 "> 
					<a href="paratha.php" class="btn "><img src="caparatha.jpg" alt="Starter" height="120px" width="120px" ></a>
					<h2>Paratha</h2>	
				</div>	 
			</div>
      <br>
			<div class="row">
				<div class= "col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 "> </div>
				<div class= "col-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 "> 
					<a href="rolls.php" class="btn "><img src="ctikka_roll.jpg" alt="Starter" height="120px" width="120px" ></a>
					<h2>&ensp;&ensp;Rolls</h2>				
				</div>
				<div class= "col-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 "> 
					<a href="thali.php" class="btn "><img src="south_thali.jpg" alt="Starter" height="120px" width="120px" ></a>
					<h2>&ensp;&ensp;Thali</h2>	
				</div>	 
			</div>
		</div>

</body>
</html>