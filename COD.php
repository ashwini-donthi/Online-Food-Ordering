<?php
session_start();
require 'connection.php';
$conn = Connect();
if(!isset($_SESSION['login_user2'])){
header("location: customerlogin.php"); 
}

unset($_SESSION["cart"]);
?>

<!DOCTYPE html>
<html>
<head>
<title> Online pay</title>
<style>
.style{
      font-family:"Lucida Handwriting", cursive;
    }
    @import url('https://fonts.googleapis.com/css2?family=Red+Hat+Display:wght@500;700;900&display=swap');
        :root {
            --pale-blue: hsl(225, 100%, 94%);
            --bright-blue: hsl(245, 75%, 52%);
            --very-pale-blue: hsl(225, 100%, 98%);
            --desaturated-blue: hsl(224, 23%, 55%);
            --dark-blue: hsl(223, 47%, 23%);
        }
        body {
            font-family: 'Red Hat Display', sans-serif;
            font-size: 16px;
            position: relative;
            width: 100%;
            height: 100vh;
            padding: 0px;
            margin: 0px;
            background: var(--pale-blue);
        }
        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            width: 100%;
            height: 100%;
            background: url(https://rvs-order-summary-component.netlify.app/images/pattern-background-desktop.svg);
            background-repeat: no-repeat;
            background-size: contain;
            background-position: top;
            z-index: -1;
        }
        main {
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
        }
        .card {
            width: 320px;
            min-height: 350px;
            margin: 50px auto;
            border-radius: 10px;
            background: white;
        }
        .card .card-header {
            width: 100%;
            height: 156px;
            border-radius: 10px 10px 0px 0px;
        }
        .card .card-header img {
            width: 100%;
            border-radius: 10px 10px 0px 0px;
        }
        .card .card-body {
            width: 100%;
            height: auto;
            padding: 25px;
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .card .card-body .card-title {
            width: 100%;
            font-weight: 900;
            color: var(--dark-blue);
            text-align: center;
            padding: 15px;
            box-sizing: border-box;
        }
        .card .card-body .card-text {
            width: 100%;
            color: var(--desaturated-blue);
            text-align: center;
            line-height: 25px;
            padding: 15px 0px;
            box-sizing: border-box;
        }
        .card .card-body .card-plan {
            display: flex;
            flex-direction: row;
            align-items: center;
            column-gap: 15px;
            background: var(--very-pale-blue);
            border-radius: 10px;
            padding: 15px;
            box-sizing: border-box;
        }
        .card .card-body .card-plan .card-plan-img {
            flex-grow: 1;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
        }
        .card .card-body .card-plan .card-plan-text {
            flex-grow: 6;
            display: flex;
            flex-direction: column;
            row-gap: 4px;
        }
        .card .card-body .card-plan .card-plan-text .card-plan-title {
            color: var(--dark-blue);
            font-weight: 900;
            font-size: 14px;
        }
        .card .card-body .card-plan .card-plan-text .card-plan-price {
            color: var(--desaturated-blue);
            font-size: 14px;
        }
        .card .card-body .card-plan .card-plan-link {
            flex-grow: 1;
        }
        .card .card-body .card-plan .card-plan-link a {
            color: var(--bright-blue);
            font-weight: 700;
            font-size: 14px;
            cursor: pointer;
        }
        .card .card-body .card-plan .card-plan-link a:hover {
            color: #766cf1;
            text-decoration: none;;
        }
        .card .card-body .card-payment-button {
            padding: 25px 0px 15px;
            box-sizing: border-box;
        }
        .card .card-body .card-payment-button button {
            width: 100%;
            height: 50px;
            border: 0;
            background: var(--bright-blue);
            color: white;
            font-weight: 700;
            border-radius: 10px;
            box-shadow: 0px 10px 20px 0px hsl(245deg 75% 52% / 44%);
            cursor: pointer;
        }
        .card .card-body .card-payment-button button:hover {
            background: #766cf1;
        }
        .card .card-body .card-cancel-button {
            padding: 15px 0px;
            box-sizing: border-box;
        }
        .card .card-body .card-cancel-button button {
            width: 100%;
            border: 0;
            background: none;
            color: var(--desaturated-blue);
            font-weight: 900;
            text-align: center;
            cursor: pointer;
        }
        .card .card-body .card-cancel-button button:hover {
            color: var(--dark-blue);
        }
        

        @media (max-width: 375px) {
            body {
                height: auto;
            }
            body::before {
                content: "";
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                width: 100%;
                height: 100%;
                background: url(https://rvs-order-summary-component.netlify.app/images/pattern-background-mobile.svg);
                background-repeat: no-repeat;
                background-size: contain;
                background-position: top;
                z-index: -1;
            }
            
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
    
    <main>
        <div class="card">
            <div class="card-header">
                <img src="./images/prep.png" alt="" height="160" width="120">
            </div>
            <div class="card-body">
                <div class="card-title">Order Summary</div>
                <div class="card-text">
                  <h4>Please wait for a while.</h4>
                  <h5>Your order is being prepared.</h5></div>
                <div class="card-cancel-button">
                    <button>Thank you for Ordering</button>
                </div>
            </div>
        </div>
    </main>
</body>
</html>