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
  margin-left: auto;
  margin-right: auto;
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

 <br>   
<div class="title">
    <h1>Our Menu</h1>
    <div class="underline"></div>
</div>

<div class="container" style="width:95%;">

<!-- Display all Food from food table -->
<?php

require 'connection.php';
$conn = Connect();

$sql = "SELECT * FROM FOOD WHERE options = 'ENABLE' and category='Noodles' ORDER BY F_ID";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0)
{
  $count=0;

  while($row = mysqli_fetch_assoc($result)){
    if ($count == 0)
      echo "<div class='row'>";

?>
<div class="col-md-3">

<form method="post" action="cart.php?action=add&id=<?php echo $row["F_ID"]; ?>">
  <div class=" card mypanel" align="center";>
    <img src="<?php echo $row["images_path"]; ?>" class="img-responsive center1" width="200" height="200">
    <div class="container">
      <h4 class="text-dark"><?php echo $row["name"]; ?></h4>
      <div class="myDIV">Description</div><h5 class="hide text-info"><?php echo $row["description"]; ?></h5>
      <div class="mydiv">Allergy</div><h5 class="hide text-info"><?php echo $row["allergy"]; ?></h5>
      <h5 class="text-danger">&#8377; <?php echo $row["price"]; ?>/-</h5>
      <h5 class="text-info">Quantity: <input type="number" min="1" max="25" name="quantity" class="form-control" value="1" style="width: 60px;"> </h5>
    </div>
      <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>">
      <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
      <input type="hidden" name="hidden_RID" value="<?php echo $row["R_ID"]; ?>">
      <input type="submit" name="add" style="margin-top:5px;" class="btn btn-success" value="Add to Cart">
    
  </div>
</form>
      
     
</div>

<?php
$count++;
if($count==4)
{
  echo "</div>";
  $count=0;
}
}
?>

</div>
</div>
<?php
}
else
{
  ?>

  <div class="container">
    <div class="jumbotron">
      <center>
         <label style="margin-left: 5px;color: red;"> <h1>Oops! No food is available.</h1> </label>
      </center>
       
    </div>
  </div>
  <?php
}
?> 
</body>
</html>