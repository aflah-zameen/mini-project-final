<?php
 $lnameErr=$fnameErr = $emailErr = $genderErr = $categErr =$priceErr=$phoneErr=$expErr=$passwordErr=$addressErr= "";
 $fname=$lname = $email = $gender =$status=$phone="";
 $flag=0;
if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit']))
{
    $con=mysqli_connect('localhost','root');
    $valid=1;
mysqli_select_db($con,'mini-project');
function test_input($data){
  $data=trim($data);
  $data=stripslashes($data);
  $data=htmlspecialchars($data);
  return $data;
}
if(empty($_POST['fname']))
{
$fnameErr="Name is required.";
}
else
{
$fname= test_input($_POST['fname']);
if (!preg_match("/^[a-zA-Z-' ]*$/",$fname)) {
$fnameErr = "Only letters and white space allowed.";
$valid=0;
}
}
if(empty($_POST['email']))
{
$emailErr="Email is required.";
}else{
$email = test_input($_POST["email"]);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
$emailErr = "Invalid email format.";
$valid=0;
}
}
if(empty($_POST['address']))
{
$addressErr="Address is required.";
}
if(empty($_POST['password']))
{
  $passwordErr="Password is required";
}
else{
	$password=test_input($_POST['password']);
	if(strlen($password)<8)
	{
	  $passwordErr="atleast 8 characters in length";
	  $valid=0;
  
	}
	if(strlen($password)>16)
	{
	  $passwordErr="long password";
	  $valid=0;
  
	}
	$number    = preg_match('@[0-9]@', $password);
	$uppercase = preg_match('@[A-Z]@', $password);
	if(!$number || !$uppercase)
	{
	  $passwordErr="Password should include at least one upper case letter and one number";
	  $valid=0;
  
	}
  
  }

if(empty($_POST['phone']))
{
$phoneErr="Phone number is required.";
}
else{
$phone=test_input($_POST['phone']);
if(!preg_match('/^[0-9]{10}+$/', $phone)) {
$phoneErr="Invalid phone number";
$valid=0;
}
}

if($valid==1 && !empty($_POST['fname']) && !empty($_POST['email']) && !empty($_POST['address'])&& !empty($_POST['phone'])&& !empty($_POST['password']))
{   
    $fname=$_POST['fname'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $phone=$_POST['phone'];
	$password=$_POST['password'];
    $sql="INSERT INTO user (user_name,email,homeaddress,phone,user_password) VALUES ('$fname','$email','$address','$phone','$password') ";
    $query=$con->query($sql); 
    if($query)
    {
		


	session_start();
	$sql="SELECT id from user where email='$email' ";
	$query=$con->query($sql);
	$array=mysqli_fetch_assoc($query);
	$_SESSION['userid']=$array['id'];
    $status="Successfully Completed";
	header("Location:/daily_assist/homepage/homepage.php");
    }
    else
    $status= "Error Occured";
}
}
?>







