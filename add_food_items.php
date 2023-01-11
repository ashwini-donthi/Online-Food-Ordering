<?php
include('session_m.php');

if(!isset($login_session)){
header('Location: customerlogin.php'); 
}

?>
<!DOCTYPE html>
<html>

  <head>
    <title>Add food items </title>
  </head>
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
					  <li class="nav-item "><a class="nav-link " href="aboutus.php">About </a></li>										
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
    <li><a href="view_food_items.php" class="dropdown-item ">View Food Items</a></li>
    <li><a href="add_food_items.php" class="dropdown-item active">Add Food Items</a></li>
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

    <div class="col-xs-9">
      <div class="form-area" style="padding: 0px 180px 180px 180px;">
        <form action="add_food_items1.php" method="POST">
        <br style="clear: both">
        <br><br>
          <h3 style="margin-bottom: 25px; text-align: center; font-size: 30px;"> ADD NEW FOOD ITEM HERE </h3>

          <div class="form-group">
            <input type="text" class="form-control" id="name" name="name" placeholder="Your Food name" required="">
          </div>     
          <br>
          <div class="form-group">
            <input type="text" class="form-control" id="price" name="price" placeholder="Your Food Price (INR)" required="">
          </div>
          <br>
          <div class="form-group">
            <input type="text" class="form-control" id="description" name="description" placeholder="Your Food Description" required="">
          </div>
          <br>
          <div class="form-group">
            <input type="text" class="form-control" id="allergy" name="allergy" placeholder="Allergens" required="">
          </div>
          <br>
          <div class="form-group">
            <input type="text" class="form-control" id="images_path" name="images_path" placeholder="Your Food Image Path [images/<filename>.<extention>]" required="">
          </div>
          <br>
          <div class="form-group">
          <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right"> ADD FOOD </button>    
      </div>
        </form>

        
        </div>
      
    </div>
</div>

  </body>
</html>