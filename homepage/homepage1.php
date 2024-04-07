<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ActualHomePage</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="caro.css" rel="stylesheet">
</head>
<body>

<!-- Navigation -->
<nav class=" navbar navbar-expand-md sticky-top">
    <div class="container-fluid">
        <a href="#" class="navbar-brand">Daily Assist</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#resnavbar">
        <span class="navbar-toggler-icon"></span>
        </button>
       <div class="collapse navbar-collapse" id="resnavbar">
           <ul class="navbar-nav ml-auto">
           <li class="nav-item active">
                    <a class="nav-link" href="login/Loginn.php?link=0">Login</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="homepage1.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.html">About</a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link" href="services.html">Services</a>
                </li>
                 
                
                
                 <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
           </ul>
       </div>
    </div>
</nav>

<!--- Image Slider -->
<div id="slides" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">

  <li data-target="#slides" data-slide-to="0" class="active"></li>
    <li data-target="#slides" data-slide-to="1"></li>
    <li data-target="#slides" data-slide-to="2"></li>
    <li data-target="#slides" data-slide-to="3"></li>
    <li data-target="#slides" data-slide-to="4"></li>
     <li data-target="#slides" data-slide-to="5"></li>
   
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 sized" src="pics/slide5.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 sized"  src="pics/nurse.jpg" alt="Second slide">
     
    </div>
    <div class="carousel-item">
     
      <img class="d-block w-100 sized" src="pics/worker.jpg" alt="Third slide">
      </div>
   <div class="carousel-item">
     
      <img class="d-block w-100 sized" src="pics/slide3.jpg" alt="fourth slide">
      </div>
      <div class="carousel-item">
     
      <img class="d-block w-100 sized" src="pics/slide4.jpg" alt="fifth slide">
      </div>
      <div class="carousel-item">
     
      <img class="d-block w-100 sized" src="pics/crowd.jpg" alt="sixth slide">
      </div>
    
  </div>
</div>




<!--- Footer -->
<footer id="contact">
    <div class="container-fluid">
        <div class="row text-center">
        <div class="col-md-3">
                <p>Contact</p>
                <hr class="light">
                <p>55-555-555</p>
                <p>dalyassist.@mail.com</p>
        </div>
         <div class="col-md-3">
                <p>Address</p>
                <hr class="light">
                <p>Kidangoor South</p>
                <p>Kottyam, Kerala</p>
                <p>686583</p>
        </div>
        <div class="col-md-3">
                <p>Control Panel</p>
                <hr class="light">
                <div class="login"> <a href="../admin/adminvalidity.php?link=0">Admin login</a><br><br>
                <a href="../staff/staffvalidity.php?link=0">Staff login</a></div>
               
               
        </div>
        <div class="col-md-3">
        </div>
        <div class="col-md-4 social padding">
        <a href="#"><i class="fab  fa-facebook"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-youtube"></i></a>
        <a href="#"><i class="fab fa-google-plus-g"></i></a>
        </div>
        <div class="col-12">
            <h5>&copy; All Rights Reserved</h5>
        </div>
        </div>
    </div>
</footer>

</body>
</html>













