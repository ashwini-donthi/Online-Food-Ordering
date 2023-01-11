<?php
session_start();

if(!isset($_SESSION['login_user2'])){
header("location: customerlogin.php"); 
}

?>
<!DOCTYPE html>
<html>
<head>
<title> Online pay</title>
<style>
    *{
    margin: 0;
    padding: 0;
}
.style{
      font-family:"Lucida Handwriting", cursive;
    }
body{
  font-family : sans-serif;
}
.app-container{
    height: 568px;
    width: 350px;
    background-image: linear-gradient(#580e8f,#9200ff);
    top: 56%;
    left: 50%;
    transform: translate(-50%,-50%);
    position: absolute;
}


.left-icon{
    float: left;
    margin-left: 30px;
}

.right-icon{
    float: right;
    margin-right: 30px;
}

.middle-box{
    height: 150px;
    background-image: linear-gradient(#580e8f,#9200ff);
    margin: 57px 20px 20px;
    text-align: center;
    font-size: 12px;
    border-radius: 10px;
    color: #fff;
}
.middle-box h1{
    padding-top: 30px;
    padding-bottom: 30px;
    font-size: 52px;
    font-weight: normal;   
}

.middle-box h1 span{
    font-size: 22px;
    margin-left: 5px;
    bottom: 18px;
    position : relative;
}

.payment-option-btn{
    color: #fff;
    margin: 5px 30px;
    height: 30px;
    width: 290px;
    background-color: #9100fd;
    border: none;
    cursor: pointer;
}

.card-details{
    background: #fff;
    color: #555;
    margin: 10px 30px;
    padding: 10px;
}
.card-details p{
    font-size: 14px;
}


.card-details label{
    font-size: 12px;
    line-height: 20px;
}

.card-num-field-group{
    margin-top: 10px;  
}

.date-field-group{
    margin-top: 10px;
    display: inline-block;
}

.cvc-field-group{
    margin-top: 10px;
    display: inline-block;
    float: right;
}


.name-field-group{
    margin-top: 10px;
}

.card-num-field, .name-field{
    width: 260px;
    
}

.date-field, .cvc-field{
    width: 70px;
}

.card-details input{
    border: 1px solid #ccc;
    height: 22px;
    padding: 5px;
    font-size: 12px;
}

.card-details input::placeholder{
    color: #ccc;
}


.pay-btn{
    width: 270px;
    color: #fff;
    margin-top: 20px;
    height: 30px;
    background-color: #9100fd;
    border: none;
    cursor: pointer;
}
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
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
    
<div class= "app-container">
    
    <div class="middle-box">
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
  }
?>
        <h1><?php echo "$gtotal"; ?><span>/-</span></h1>
        <p>Pay To Restro</p>
    </div>
    
    <div class="card-details">
    <p>Pay using credit or debit card</p>
    <div class="card-num-field-group">
    <label>Card Number</label><br>
    <input type="text" class="card-num-field" placeholder="XXXX-XXXX-XXXX-XXXX">
    </div>
    
    <div class="date-field-group">
    <label>Expiry Date</label><br>
    <input type="text" class="date-field" placeholder="MM">
    <input type="text" class="date-field" placeholder="YYYY">
    </div>
    
    <div class="cvc-field-group">
    <label>CVV</label><br>
    <input type="password" class="cvc-field" placeholder="CVV">
    </div>

    <div class="name-field-group">
    <label>Card Holder Name</label><br>
    <input type="text" class="name-field" placeholder="Name on the card">
    </div>
    <br>
    <div class="row ">
        <div class="col-6">
            <a href="payment.php"><input type="submit" class="btn btn-danger btn-block" value="CANCEL" required="" /></a>   
           </div>
        <div class="col-6">
            <a href="COD.php"><input type="submit" class="btn btn-success btn-block" value="PAY NOW" required="" /></a>  
        </div>
    </div>
    
    </div>
    
</div>
</body>
</html>