<?php
session_start();
require 'connection.php';
$conn = Connect();
if(!isset($_SESSION['login_user2'])){
header("location: customerlogin.php"); 
}
?>

<html>
<head>
  <title> Cart </title>
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
	.center{
    margin-left: auto;
  margin-right: auto;  
  text-align : center;
  }
  .container1{
	background-color: #fff;
	border-radius: 10px;
  	box-shadow: 0 14px 28px rgba(0,0,0,0.25), 
			0 10px 10px rgba(0,0,0,0.22);
	position: relative;
	overflow: hidden;
	width: 650px;
	max-width: 100%;
	min-height: 350px;
  margin-left: auto;
  margin-right: auto;  
  text-align : center;
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
    <li><a href="view_food_items.php" class="dropdown-item active">View Food Items</a></li>
    <li><a href="add_food_items.php" class="dropdown-item ">Add Food Items</a></li>
    <li><a href="edit_food_items.php" class="dropdown-item ">Edit Food Items</a></li>
    <li><a href="delete_food_items.php" class="dropdown-item ">Delete Food Items</a></li>
    <li><a href="view_order_details.php" class="dropdown-item ">View Order Details</a></li>
  </ul>
</div>
            <li class="nav-item "><a class="nav-link " href="customerlogin.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
<?php
}
else if (isset($_SESSION['login_user2'])) {
  ?>
           <ul class="nav navbar-nav navbar-right">
            <li class="nav-item "><a class="nav-link " href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user2']; ?> </a></li>
            <li class="nav-item "><a class="nav-link "  href="foodlist.php"><span class="glyphicon glyphicon-cutlery"></span> Food Zone </a></li>
            <li class="nav-item active"><a class="nav-link active "href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart <span class="sr-only">(current)</span> 
            [<?php
              if(isset($_SESSION["cart"])){
              $count = count($_SESSION["cart"]); 
              echo "$count"; 
            }
              else
                echo "0";
              ?>]
            </a></li>
            <li class="nav-item "><a class="nav-link " href="logout_u.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
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

 <?php
$gtotal = 0;
  foreach($_SESSION["cart"] as $keys => $values)
  {

    $F_ID = $values["food_id"];
    $foodname = $values["food_name"];
    $quantity = $values["food_quantity"];
    $price =  $values["food_price"];
    $total = ($values["food_quantity"] * $values["food_price"]);
    $R_ID = $values["R_ID"];
    $username = $_SESSION["login_user2"];
    $order_date = date('Y-m-d');
    
    $gtotal = $gtotal + $total;
     $query = "INSERT INTO ORDERS (F_ID, foodname, price,  quantity, order_date, username, R_ID) 
              VALUES ('" . $F_ID . "','" . $foodname . "','" . $price . "','" . $quantity . "','" . $order_date . "','" . $username . "','" . $R_ID . "')";
      $success = $conn->query($query);         

      if(!$success)
      {
        ?>
        <div class="container">
          <div class=" center jumbotron">
            <h1>Something went wrong!</h1>
            <p>Try again later.</p>
          </div>
        </div>

        <?php
      }   
  }
        ?>
        <br><br><br>
  <div class="container1 ">
        <div class="container">
          <div class=" center jumbotron">
            <br>
            <h1>Choose your payment option</h1>
          </div>
        </div>
        <br><br>
  <h2 class="text-center">Grand Total: &#8377;<?php echo "$gtotal"; ?>/-</h2>
  <h6 class="text-center">including all service charges. (no delivery charges applied)</h6>
  <br>
  <h1 class="text-center">
    <a href="cart.php"><button class="btn btn-warning"><span class="glyphicon glyphicon-circle-arrow-left"></span> Go back to cart</button></a>
    <a href="onlinepay.php"><button class="btn btn-success"><span class="glyphicon glyphicon-credit-card"></span> Pay Online</button></a>
    <a href="COD.php"><button class="btn btn-success"><span class="glyphicon glyphicon-"></span> Cash On Delivery</button></a>
  </h1>
  </div>
        


<br><br><br><br><br><br>
        </body>
</html>