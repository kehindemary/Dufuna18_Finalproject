<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Customer Details</title>
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
                    <a class="nav-link" href="vieworder.php">View Order<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="customerdetail1.php">View all Orders</a>
                    </li>
                    </ul>
                    </div>
                    </nav>
            <div class="container">
            <table class="table table-bordered">
    <thead>
    <tr>
      <th scope="col">Orderid</th>
      <th scope="col">Firstname</th>
      <th scope="col">Lastname</th>
      <th scope="col">Email</th>
      <th scope="col">Menu</th>
      <th scope="col">Quantity</th>
    </tr>
    </thead>
    <tbody>
      <?php
      include ('connection.php');
      $sql = "SELECT * FROM orders";
      $run = mysqli_query($conn, $sql);
      while($_SESSION = mysqli_fetch_assoc($run)){
            ?>
    <tr>
      <th scope="row"><?php echo $_SESSION['order_id']?></th>
      <td><?php echo $_SESSION['firstname']?></td>
      <td><?php echo $_SESSION['lastname']?></td>
      <td><?php echo $_SESSION['email']?></td>
      <td><?php echo $_SESSION['menu']?></td>
      <td><?php echo $_SESSION['quantity']?></td>
    </tr>
      <?php } ?>
      </tbody>
  </table>
  <button class="btn"><a href ="customerdetail.php" class = "nav-link">View Details</a></button>
      </div>
</body>
</html>