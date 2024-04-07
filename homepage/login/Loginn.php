<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Login</title>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="Assets/Template/Login/css/style.css">

</head>

<body >
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/daily_assist/homepage/homepage1.php">Home <span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>
<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'mini-project');
session_start();
$link=$_GET['link'];
if($link)
session_destroy(); 

if(isset($_POST["btnsave"]))
{  
$staffemail="";
$staffpass="";
$useremail="";
$userpass="";
$adminemail="";
$adminpass="";
 
 	
	
	$seluser="select * from user where email='".$_POST["txt_email"]."' and user_password='".$_POST["txt_pass"]."'";
	$row2=$con->query($seluser);
	$data2=$row2->fetch_assoc();
	if(mysqli_num_rows($row2)>0)
	{
	$useremail=$data2["email"];
	$userpass=$data2["user_password"];
	}
	
	
	 if($useremail==$_POST["txt_email"]&&$userpass==$_POST["txt_pass"])
	{
	
	$sql="SELECT id from user where email='$useremail' ";
	$query=$con->query($sql);
	$array=mysqli_fetch_assoc($query);
	$_SESSION['userid']=$array['id'];
	echo $_SESSION['userid'];

		header("Location:../homepage.php");
	
		
	}
	
	
	else
	{
		?>

		<script>
		alert("Invalid User");
		window.location="Loginn.php?link=0";
		</script>
        <?php
	}
}
?>
<section class="ftco-section">
		<div class="container">

			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="wrap">
                    <centre>
                        <br><br>
						<img src="Assets\Template\Login\images\bg-1.jpg" width="180" height="180"/></centre>
						<div class="login-wrap p-3 p-md-5">
			      		<div class="form-group mt-0">
			      			<form action="Loginn.php?link=0" class="signin-form" method="post">
			      			<input type="email" class="form-control" name="txt_email" required autocomplete="off">
			      			<label class="form-control-placeholder" for="username">Email</label>
			      		</div>
		            <div class="form-group">
		              <input id="password-field" type="password" class="form-control" name="txt_pass" required autocomplete="off">
		              <label class="form-control-placeholder" for="password">Password</label>
		              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
		            </div>
		            <div class="form-group">
		            	<button type="submit" name="btnsave" onclick="sendEmail()"  class="form-control btn btn-primary rounded submit px-3">Log In</button>
		            </div>
	          </form>
		          <p class="text-center">Don't have an account? </p>
                  <p ><a  href="User.php">User Sign Up</a>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>
	<script src="Assets/Template/Login/js/jquery.min.js"></script>
  <script src="Assets/Template/Login/js/popper.js"></script>
  <script src="Assets/Template/Login/js/bootstrap.min.js"></script>
  <script src="Assets/Template/Login/js/main.js"></script>
</body>
</html>

<script>
//Show Password
const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#txt_pass');

  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});

</script>
