<?php
  include ('db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }
    
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      margin-bottom: 0;
    }
   
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    .imge{

      float: left;
    }
    img:hover {
    -webkit-transform: scaleX(-1);
    transform: scaleX(-1);
}
  </style>
</head>
<body>

<div class="jumbotron">
  <div class="container text-center">
    <div class="imge">
    <img src="logo.png" alt="Logo">
  </div>
  
    <h1>Online Shopping Store</h1>      
    <p>Life's Short, Go Shopping</p>
  </div>
</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li ><a href="index.php">Home</a></li>
        <li ><a href="innerpage.php">Men</a></li>
        <li><a href="innerpage.php">Women</a></li>
        <li><a href="innerpage.php">Kids</a></li>
        <li><a href="innerpage.php">Home & Living</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li>
        <form class="navbar-form navbar-left" action="/action_page.php">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search" name="search">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>
    </li>
        <?php
          if(isset($_SESSION['email'])){
        ?>
        <li><a href="index.php"><span class="glyphicon glyphicon-user"></span><?php echo $_SESSION['email']; ?></a></li>
        <li><a href="logout.php"><span class="glyphicon glyphicon-user"></span>Sign Out</a></li>
        <?php
          }else{
        ?>
         <li><a href="login.php"><span class="glyphicon glyphicon-user"></span>Sign In</a></li>
        <?php
          }
        ?>
        <li><a href="add_cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
      </ul>
    </div>
  </div>
</nav>

