<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>About</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<style>
	.style{
		font-family:"Lucida Handwriting", cursive;
	}
	body
	{
	  background-image: url('');
	  background-repeat: no-repeat;
	  background-attachment: fixed;
	  background-size: cover;
	}
	
	h2{
	font-family : "Times New Roman";}
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
					  <li class="nav-item active"><a class="nav-link active" href="aboutus.php">About Us<span class="sr-only">(current)</span> </a></li>										
					  <li class="nav-item "><a class="nav-link " href= "contactus.php">Contact</a></li>
					  <?php
if(isset($_SESSION['login_user1'])){

?>


          <ul class="nav navbar-nav navbar-right">
            <li class="nav-item "><a class="nav-link " href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user1']; ?> </a></li>
            <div class="dropdown">
  <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
    Control Panel
  </a>

  <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <li><a href="view_food_items.php" class="dropdown-item active">View Food Items</a></li>
    <li><a href="add_food_items.php" class="dropdown-item ">Add Food Items</a></li>
    <li><a href="edit_food_items.php" class="dropdown-item ">Edit Food Items</a></li>
    <li><a href="delete_food_items.php" class="dropdown-item ">Delete Food Items</a></li>
    <li><a href="view_order_details.php" class="dropdown-item ">View Order Details</a></li>
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
            <li class="nav-item "><a class="nav-link "  href="foodlist.php"><span class="glyphicon glyphicon-cutlery"></span> Food Zone </a></li>
            <li class="nav-item "><a class="nav-link "href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart 
            [<?php
              if(isset($_SESSION["cart"])){
              $count = count($_SESSION["cart"]); 
              echo "$count"; 
            }
              else
                echo "0";
              ?>]
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

<div class="row">
	<div class="col-7">
	<div class="container">
		<div id="slide" class="carousel slide" data-bs-ride="carousel">
	  <div class="carousel-indicators">
		<button type="button" data-bs-target="#slide" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
		<button type="button" data-bs-target="#slide" data-bs-slide-to="1" aria-label="Slide 2"></button>
	  </div>
	  <div class="carousel-inner">
		<div class="carousel-item active">
		  <img src="i1.png" class="d-block " alt="...">
		  <div class="carousel-caption d-none d-md-block">
			<h5></h5>
		  </div>
		</div>
		<div class="carousel-item">
		  <img src="i3.jpg"" class="d-block " alt="...">
		  <div class="carousel-caption d-none d-md-block">
			<h5></h5>
		  </div>
		</div>	
	  </div>
	  <button class="carousel-control-prev" type="button" data-bs-target="#slide" data-bs-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="visually-hidden">Previous</span>
	  </button>
	  <button class="carousel-control-next" type="button" data-bs-target="#slide" data-bs-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="visually-hidden">Next</span>
	  </button>
	</div>
</div>
</div>	
	
	<div class="col-4" style="text-align:justify;">
		<p style="font-size:19px;">Restro strives to source local, sustainable and organic when possible. We work hard to source premium ingredients and we cook everything from scratch with love. We also do our best to pay our employees living wages (tips are shared with all employees, including kitchen staff) and to reduce our environmental footprint wherever we can. Overall, these factors translate to higher menu prices, but we hope that you find value and feel a sense of comfort in knowing that we aim to get better everyday at doing what is important to us.</p>
	</div>
</div>
<br>
<hr>
<br>
<center><video width="500px" height="300px" controls="controls"/> 
        <source src="vid.mp4" type="video/mp4"> 
    </video>
</center>
<br>
<hr>
<br>
<p style="text-align:center; padding: 40px 80px;" > Updated March 24th, 2022
<br><br>
<strong>COVID POLICY UPDATE</strong><br>
<em>WE NO LONGER REQUIRE PROOF OF VACCINATION FOR INDOOR DINING. OUTDOOR DINING AVAILABILITY IS DEPENDENT ON STAFFING AND WEATHER.<br>
PLEASE STAY HOME IF YOU ARE FEELING SICK. THANK YOU VERY MUCH FOR YOUR UNDERSTANDING!</em><br><br>
<strong>NO RESERVATIONS (BUT YES WAITLIST!)</strong><br>
<em>WE DO NOT TAKE RESERVATIONS AS WE SEAT GUESTS ON A FIRST COME FIRST SERVE BASIS. HOWEVER, YOU CAN JOIN OUR YELP WAITLIST TO SAVE YOUR SPOT AHEAD OF TIME (SAME DAY ONLY)!</em>
<br><br><strong>BUSINESS HOURS</strong><br>
<em>MONDAY THROUGH SUNDAY - 3:00PM - 12:00AM <br>
WEDNESDAY CLOSED<br>
INDOOR & OUTDOOR SEATING, TAKEOUT, AND DELIVERY AVAILABLE</em><br></p>
</body>
</html>





