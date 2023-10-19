<?php
include('session_m.php');

if(!isset($login_session)){
header('Location: index.php'); 
}

?>
<!DOCTYPE html>
<html>

  <head>
    <title> Manager Login | Afya </title>
  </head>

  <link rel="stylesheet" type = "text/css" href ="css/add_facility.css">
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

  <body>


    <button onclick="topFunction()" id="myBtn" title="Go to top">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </button>
  
  
    <script type="text/javascript">
      window.onscroll = function()
      {
        scrollFunction()
      };

      function scrollFunction(){
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("myBtn").style.display = "block";
        } else {
          document.getElementById("myBtn").style.display = "none";
        }
      }

      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>

    <nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Afya</a>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="aboutus.php">About</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $login_session; ?> </a></li>
            <li class="active"> <a href="managerlogin.php">MANAGER CONTROL PANEL</a></li>
            <li><a href="logout_m.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
        </div>

      </div>
    </nav>




<div class="container">
    <div class="jumbotron">
     <h1>Hello Manager! </h1>
     <p>Manage all your facilities from here</p>

    </div>
    </div>
<div class="container">
    <div class="container">
    	<div class="col">
    		
    	</div>
    </div>

    
    	<div class="col-xs-3" style="text-align: center;">

    	<div class="list-group">
            <a href="view_facility.php" class="list-group-item ">View Facilities</a>
    		    <a href="add_facility.php" class="list-group-item ">Add Facilities</a>
            <a href="view_medicine.php" class="list-group-item ">View medicine</a>
    		    <a href="add_medicine.php" class="list-group-item ">add medicine</a>
    	</div>
    </div>
    


    
    <div class="col-xs-9">
      <div class="form-area" style="padding: 0px 100px 100px 100px;">
        <form action="add_medicine1.php" method="POST">
        <br style="clear: both">
          <h3 style="margin-bottom: 25px; text-align: center; font-size: 30px;"> ADD NEW MEDICINE </h3>

          <div class="form-group">
            <label>Product name</label>
            <input type="text" class="form-control" id="productname" name="productname" placeholder="Your product name" required="">
          </div>
          
          <div class="form-group">
            <label>Batch number</label>
            <input type="text" class="form-control" id="batchnumber" name="batchnumber" placeholder="Your batchnumber" required="">
          </div> 

          <div class="form-group">
            <label>Expiry date</label>
            <input type="text" class="form-control" id="expirydate" name="expirydate" placeholder="expiry date" required="">
          </div>

          <div class="form-group">
            <label>Quantity</label>
            <input type="text" class="form-control" id="quantity" name="quantity" placeholder="quantity" required="">
          </div>

          <div class="form-group">
            <label>Manufacturing date</label>
            <input type="text" class="form-control" id="manufacturingdate" name="manufacturingdate" placeholder="manufacturing date" required="">
          </div>

          <div class="form-group">
          <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right"> ADD MEDICINE </button>    
      </div>
        </form>

        
        </div>
      
    </div>
</div>

  </body>
</html>