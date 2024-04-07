<!DOCTYPE html>
<html>
<head>
    <title>Public Service Website</title>
    <style>

body
        {
            background-image:url('imgs/black.jpg');
            background-size: cover;
        }
        /* CSS Styles */
        body {
            font-family: Arial,sans-serif;
            margin: 0;
            padding: 0;
        }
        nav{
            background-color: #f4f4f4;
            padding: 10px;
            text-align: left;
        }
        .nav-1{
            background-color:#f4f4f4;
            padding:px;
            text-align:right;
        }
        .container {
            font-family:Verdana, Geneva, Tahoma, sans-serif;
            max-width: 460px;
            margin:0 auto;
            padding: 10px;
            position: relative;
            background-color: #1c1583;
            color: #0f0f0f;
            text-align:inherit;
            background-image:url('imgs/home.jpg');
            background-size:contain;
            background-repeat:no-repeat;
        }

        h1 {
            text-align: center;
        }

        .choices {
            display: flex;
            justify-content: center;
            margin-top: 300px;
        }

        .choice {
            width: 300px;
            height: 200px;
            background-color: #f2f2f2;
            border-radius: 10px;
            margin: 10px;
            padding: 20px;
            text-align: center;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .choice:hover {
            background-color: #a0a19d;
        }
    </style>
</head>
<body>


<nav>
        <a href="home.php">Home</a>
        <a href="services.php">Services</a>
        <a href="contact.php">Contact</a>
    </nav>

    <nav class="nav-1">
        <a href="login/Loginn.php">Login</a>
        
    </nav >

    <nav class=" navbar navbar-expand-md sticky-top">
    <div class="container-fluid">
        <a href="#" class="navbar-brand">Daily Assist</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#resnavbar">
        <span class="navbar-toggler-icon"></span>
        </button>
       <div class="collapse navbar-collapse" id="resnavbar">
           <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.html">About</a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link" href="services.html">Services</a>
                </li>
                  <li class="nav-item">
                    <a class="nav-link" href="achieve.html">Gallery</a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link" href="network.html">Network</a>
                </li>
                
                 <li class="nav-item">
                    <a class="nav-link" href="ourteam.html">Team</a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
           </ul>
       </div>
    </div>
</nav>

    <div class="container">
        <h1>DAILY ASSIST</h1>
        <div class="choices">
            <a href="client.php" class="choice">
                <h2>House Shifting Service</h2>
                <p>Get assistance for your house shifting needs.</p>
            </a>
            <a href="local-services.php" class="choice">
                <h2>Local Household Services</h2>
                <p>Find indoor and outdoor household services near you.</p>
            </a>
        </div>
    </div>
</body>
</html>
