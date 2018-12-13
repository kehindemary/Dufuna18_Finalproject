<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Order Details</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" 
    integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">    
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/main1.css" />
    <script src="jquery/jquery.min.js"></script>
    <script src="popper/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
   
</head>
<body>
        <div class="container">
        <h2 class="text-center">Order Status</h2>
        <nav class="navbar navbar-expand-md navbar-light fixed-top">
                <img src="images/imgslides/logo.jpg" class="rounded-circle circle" width="150px" height="100px">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="order.htmlnavbarResponsive">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                    <a class="nav-link" href="index.html">Home </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="adminlogin.php">Admin</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="allorders.php">View all Orders</a>
                    </li>
                    </ul>
                    </div>
                    </nav>
      <?php
        include ('connection.php');
        $newsql = "UPDATE orders SET order_status='1' WHERE order_id ='".$_GET['id']."'";
        $result = mysqli_query($conn, $newsql)or die(mysqli_error($conn));        

    $sql = "SELECT order_status FROM orders WHERE order_id ='".$_GET['id']."'";
        $row = mysqli_query($conn, $sql)->fetch_assoc();





        ?>
       
        
           <h3 class = "text-center">Order Status:
                <?php
               if($row['order_status'] == 0){
                echo "Pending";
                }
                else{
                echo "Resolved";
                }
                $row['order_status']
                ?>
                
            </h3>
           
            <a href="allorders.php" class="nav-link text-center">Back</a>
        </div>
        <footer class="container-fluid" id="footer">
        <div class="row">
        <div class="col-sm-6">
        <h4 class="text-white">Contact</h4>
        <p class="text-white">
        Email Address<br>
        adebolakehindemary"gmail.com
        </td></tr>
        </div>
        <div class="col-sm-6">
        <h4 class="text-white">Connect with me</h4>
        <a href="https://www.github.com/kehindemary" class="btn btn-outline-primary btn-icon-only rounded-circle">
        <i class="fab fa-github"></i>
        </a>
        <a href="https://www.twitter.com/kehindemary" class="btn btn-outline-primary btn-icon-only rounded-circle">
        <i class="fab fa-twitter"></i>
        </a>
        <a href="https://web.facebook.com/adebola.kehindemary" class="btn btn-outline-primary btn-icon-only rounded-circle">
        <i class="fab fa-facebook"></i>
        </a>
        <a href="https://www.instagram.com/adebolakehindemary/" class="btn btn-outline-primary btn-icon-only rounded-circle">
        <i class="fab fa-instagram"></i>
        </a>
        <a href="https://www.linkedin.com/lamina-kehinde-mary-b43982169" class="btn btn-outline-primary btn-icon-only rounded-circle">
        <i class="fab fa-linkedin"></i>
        </a>
        </div>
        </div>
        <div class="row">
        <div class="col-sm-6">
        <P class="text-white">
        Phone Number<br>
        08174036097
        </td></tr>
        </div>
        <div class="col-sm-6">
        <p class="text-white">Copyright © 2018 Dufuna-fem, All rights reserved.</td></tr>
        </div>
        </div>
        </footer> 
</body>
</html>