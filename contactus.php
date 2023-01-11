<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Connect with us</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
	.style{
	font-family:"Lucida Handwriting", cursive;
	}
.p1 {
  font-family: "Times New Roman", Times, serif;
}	
p{
font-size:25px;}
.p2{
font-size:20px;}

a{
font-size:20px;}

	.fa {
  padding: 15px;
  font-size: 35px;
  width: 50px;
  text-align: center;
  text-decoration: none;
}
.fa-facebook-f{
  color:  #3B5998;
}

.fa-twitter {
  color:#55ACEE;   
}

.fa-youtube { 
  color: #bb0000;
}

.fa-instagram {    
  background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%);
  -webkit-background-clip: text;
  background-clip: text;
  -webkit-text-fill-color: transparent;

}
.bg{
background-image:url('contact1.jpg');
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
					  <li class="nav-item active"><a class="nav-link active" href= "#">Contact<span class="sr-only">(current)</span></a></li>  
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
            <li class="nav-item "><a class="nav-link " href="cuatomerlogin.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
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
<div >
	<div class="container-fluid" style="background-image:url('contact1.jpg');color:white;text-align:center;">
		<br><br>
		<h1 class="style">The Restro !!</h1>
		<br><br>
		<p><em> The place where you are meant to be. Contact us today to inquire about your queries.</em></p>
		<br><br>
	</div>   
</div>

<div class="col-xs-12 line"><hr></div>

    <div class="container" >
    <div class="col-md-5" style="float: none; margin: 0 auto;">
      <div class="form-area">
        <form method="post" action="">
        <br style="clear: both">
          <h3 style="margin-bottom: 25px; text-align: center; font-size: 30px;"> Contact Form</h3>

          <div class="form-group">
            <input type="text" class="form-control" id="name" name="name" placeholder="Name" required autofocus="">
          </div>

          <div class="form-group">
            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
          </div>     

          <div class="form-group">
            <input type="Number" class="form-control" id="mobile" name="mobile" placeholder="Mobile Number" required>
          </div>

          <div class="form-group">
            <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
          </div>

          <div class="form-group">
           <textarea class="form-control" type="textarea" id="message" name="message" placeholder="Message" maxlength="140" rows="6"></textarea>
          </div> 
          <br>
          <input type="submit" name="submit" type="button" id="submit" name="submit" class="btn btn-primary pull-right"/>    
        </form>
<br><br>
      </div>
    </div>
      
    </div>

    <?php
if (isset($_POST['submit'])){
require 'connection.php';
$conn = Connect();

$Name = $conn->real_escape_string($_POST['name']);
$Email_Id = $conn->real_escape_string($_POST['email']);
$Mobile_No = $conn->real_escape_string($_POST['mobile']);
$Subject = $conn->real_escape_string($_POST['subject']);
$Message = $conn->real_escape_string($_POST['message']);

$query = "INSERT into contact(Name,Email,Mobile,Subject,Message) VALUES('$Name','$Email_Id','$Mobile_No','$Subject','$Message')";
$success = $conn->query($query);

if (!$success){
  die("Couldnt enter data: ".$conn->error);
}

$conn->close();
}
?>
<div class="container-fluid text-center mt-4" style="background-image:url('contact1.jpg');" >
			<br>
			<div class="row m-2" >	
			<div class="col-4">	
				<div class="card bg text-white">
				  <div class="card-body">
					<h4 class="card-title"><em><strong>Address</strong></em></h4>
					<button class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#para">Drive to</button>
					<p class="collapse p2" id="para"><i class="fa fa-map-marker"></i> 1140, Marenahalli Rd, Putlanpalya, Jayanagara 9th Block, Jayanagar, Bengaluru, Karnataka 560069</p>		
					<iframe class="collapse" id="para" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.8557129815267!2d77.59208661384301!3d12.916993719571332!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1508cf924ea7%3A0x1560be7f0f759d58!2sRestro%20cafe!5e0!3m2!1sen!2sin!4v1650556675572!5m2!1sen!2sin" width="250" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		
				  </div>
				</div>
			</div>
			<div class="col-4">	
				<div class="card bg text-white">
				  <div class="card-body">
					<h4 class="card-title"><em><strong>Phone Number</strong></em></h4>
					<button class="btn btn-primary " data-bs-toggle="collapse" data-bs-target="#para1">Dial now</button>
					<p class="collapse p2" id="para1">
						<i class="fa fa-phone"></i> 08049704217<br>
						
					</p>		
				  </div>
				</div>
			</div>
			<div class="col-4">	
				<div class="card bg text-white">
				  <div class="card-body">
					<h4 class="card-title"><em><strong>Email </strong></em></h4>
					<button class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#para2">Mail now</button>
					<p class="collapse p2" id="para2">
						<i class="fa fa-envelope"></i> <a href="mailto: offical@therestro.in">Office mail-id</a><br>
						
					</p>		
				  </div>
				</div>
			</div>
		</div>
		<br>
		<h4 style="color:white;"><em>Connect with us on </em></h4>
		<a  href="https://www.facebook.com/RestroCafeBengaluru/"><i class="fa fa-facebook-f"></i></a>&ensp;
		<a  href="https://www.instagram.com/accounts/login/?next=/indianfoodchannel/"><i class="fa fa-instagram"></i></a>&ensp;			
		<a  href="https://twitter.com/restroappuk"><i class="fa fa-twitter"></i></a> &ensp;	
		<a  href="https://www.youtube.com/c/IndianFoodChannel/featured"><i class="fa fa-youtube"></i></a> <br>
		
	</div>
     </body>

  
</html>