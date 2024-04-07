<?php
include "../session.php" ;
?>

<!DOCTYPE html>
<html lang="en">
<head>

<style>
  

.container {
            font-family:Verdana, Geneva, Tahoma, sans-serif;
           
            margin:0 auto;
            position:initial;
            background-color:transparent;
            color: #ffff;
            text-align:inherit;
            background-size: cover;
            background-repeat:no-repeat;
        }
        
        h1 {
            text-align: center;
        }

        .choices {
            display: flex;
            justify-content: center;
            margin-top:auto;
        }

        .choice {
            width: 300px;
            height: 200px;
            background-color: #f2f2f2;
            border-radius: 40px;
            margin: 30px;
            padding: 20px;
            text-align: center;
            transition: background-color 0.3s ease;
        }

        .choice:hover {
            background-color: #a0a19d;
            color: black;
            text-decoration: none;
            
        }
        .container .choices a:link,p{
            color: black;
        }
</style>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Indoor and Outdoor</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="./caro inout.css" rel="stylesheet">
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
                    <a class="nav-link" href="/daily_assist/yourorders.php">Your orders</a>
                </li>
           <li class="nav-item active">
                    <a class="nav-link" href="homepage1.php">Logout</a>
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
<div class="container">
        <h1>WELCOME</h1>
        <div class="choices">
            <a href="./indoor/user/index.php" class="choice">
                <h2>Indoor Services</h2>
                <p>Find indoor household services near you.</p>
            </a>
            <a href="./outdoor/user/index.php" class="choice">
                <h2>Outdoor Services</h2>
                <p>Find outdoor household services near you.</p>
            </a>
        </div>
    </div>

<!--- Footer -->
<footer id="contact" style="margin-top: 15rem;">
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
                <p>street no</p>
                <p>city,state</p>
                <p>zipcode</p>
        </div>
        <div class="col-md-2">
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














