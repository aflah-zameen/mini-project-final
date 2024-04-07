<?php
$link=$_GET['link'];
$emailError = "";
$passError = "";
$userError = "";
function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con, 'mini-project');
$sql = "SELECT * FROM staff ";
$featured = $con->query($sql);
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $email = test_input($_POST['email']);
    $password = test_input($_POST['password']);
    while ($staffdetail = mysqli_fetch_assoc($featured)) {

      if ($staffdetail['email'] == $email && $staffdetail['staff_password'] == $password) {
        $staff_id=$staffdetail['id'];
        session_start();
        $_SESSION['staff_id']=$staff_id;
        header("Location:index.php");
        $userError = "";
        die();
      } else {
        $userError = "Incorrect Password or Email";
      }
    }
  } else if(empty($_POST['email'])) {
    $emailError = "Email is required";
  }
  elseif(empty($_POST['password']))
  {
  $passError = "password is required";
  }
}
if($link)
{session_start();
  $_SESSION['user_id']=array();
  session_destroy();}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="staffvalidity.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../homepage/homepage1.php">Home <span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>
<div class="container">
  <div class="row">
  <form method="post" action="staffvalidity.php?link=0">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email">
    <span><?=$emailError?></span>  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    <span><?=$passError?></span>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Sign in</button>
  <div>  <span><?=$userError?></span></div>

</form>
  </div>
</div>





<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>