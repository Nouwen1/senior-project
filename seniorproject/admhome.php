<?php
include('session_m.php');
//include('connection.php');

if(!isset($login_session)){
header('Location: index.php'); // Redirecting To Home Page
}


  //$facility =$_POST['facility'];
  //$drug =$conn->real_escape_string( $_POST['drug']);
  //$location =$conn->real_escape_string( $_POST['location']);
  //$quantity =$conn->real_escape_string( $_POST['quantity']);
  //$qrcode =$conn->real_escape_string( $_POST['qrcode']);

  // Store the QR code in the database
  //$user_check=$_SESSION['login_user2'];
  //$query = "INSERT INTO qrcodes (facility, drug, location, quantity, qrcode) VALUES ('$facility', '$drug', '$location', '$quantity', '$qrcode')";
  //$success = $conn->query($query);

 // if ($result) {
   //   echo "QR code stored in the database successfully.";
  //} else {
    //  echo "Error storing QR code in the database: " . mysqli_error($conn);
  //}
//}

//function generateQRCode($facility, $drug, $location, $quantity)
//{
  //$message = "Facility: $facility\n" .
    //  "Drug: $drug\n" .
      //"Location: $location\n" .
      //"Quantity: $quantity";

  // Generate the QR code
  //$qrCode = new QRCode($message);
  //$qrCode->setSize(200);
  //$qrCodeImage = $qrCode->getImage();

  // Get the image data as a string
  //ob_start();
  //imagepng($qrCodeImage);
  //$imageData = ob_get_clean();


  //return $imageData;
//}
?>
<!DOCTYPE html>
<html>

  <head>
    <title> Manager Login | Afya </title>
  </head>

  <link rel="stylesheet" type = "text/css" href ="css/admhome.css">
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="jss/qrcode.js"></script>

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
    		<a href="view_orders.php" class="list-group-item">View orders</a>
    		<a href="view_facility.php" class="list-group-item ">View Facilities</a>
    		<a href="add_facility.php" class="list-group-item ">Add Facilities</a>
        <a href="view_medicine.php" class="list-group-item ">View medicine</a>
    		<a href="add_medicine.php" class="list-group-item ">add medicine</a>
    	</div>
    </div>
    


    
    <div class="col-xs-9">
      <div class="form-area" style="padding: 0px 100px 100px 100px;">
      <form action ="adm1.php" method="POST"
      onsubmit="generate();return false;">
          <br style="clear: both">
          <h3 style="margin-bottom: 25px; text-align: center; font-size: 30px;"> QR GENERATION</h3>

            <!--<input type="text" id="qr" class="form-control"><br><br> -->
            <div class="form-group">
						<label>Facility</label>
						<input type="text" id="facility" class="form-control" name="facility" style="width:20em;" placeholder="Enter your facility name" required />
					</div>
					<div class="form-group">
						<label>Drug</label>
						<input type="text" id="drug" class="form-control" name="drug" style="width:20em;" placeholder="Enter your drug name" required />
					</div>
          <div class="form-group">
						<label>location</label>
						<input type="text" id="location" class="form-control" name="location" style="width:20em;" placeholder="Enter the facility location" required />
					</div>
					<div class="form-group">
						<label>Quantity</label>
						<input type="text" id="quantity" class="form-control" name="quantity" style="width:20em;" placeholder="Enter quantity packaged" required/>
					</div> </br>
          <div>
            <input type="submit" class="btn btn-primary" value="Generate QRCode">
          </div> </br>
          <!-- Download Button -->
          <button class="btn btn-success mt-3" onclick="downloadQR()">Download QRCode</button> </br>
</form> </br>

<div id="qrResult" style="height:500px; width:500px"></div>
          </div>
      </div>
    </div>
  </div>	
  <script type="text/javascript">
    var qrcode= new QRCode(document.getElementById('qrResult'),{
    width:200,
    height:200
    });

    function generate(){
      var facility = document.getElementById('facility');
            var drug = document.getElementById('drug');
            var location = document.getElementById('location');
            var quantity = document.getElementById('quantity');

            var message = "Facility: " + facility.value + "\n" +
                "Drug: " + drug.value + "\n" +
                "Location: " + location.value +"\n"+
                "Quantity: " + quantity.value;


      //var message = document.getElementById('qr');
      qrcode.makeCode(message);
    }


    function downloadQR() {
      var qrResultDiv = document.getElementById('qrResult');
      var dataURL = qrResultDiv.getElementsByTagName('img')[0].src;

      var link = document.createElement('a');
      link.href = dataURL;
      link.download = 'qrcode.png';

      link.click();
    }
  </script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>