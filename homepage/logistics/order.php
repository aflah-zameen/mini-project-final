<?php
$aError="";
$bError="";
$cError="";
$dError="";
$eError="";
$fError="";

if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit']))
{

   $con=mysqli_connect('localhost','root');
mysqli_select_db($con,'mini-project');
function test_input($data){
 $data=trim($data);
 $data=stripslashes($data);
 $data=htmlspecialchars($data);
 return $data;
}
if(empty($_POST['o_date']))
{
$aError="This field is mandatory.";
}
if(empty($_POST['d_date']))
{
  $bError="This field is mandatory.";
}
if(empty($_POST['o_loc']))
{
  $cError="This field is mandatory.";
}
if(empty($_POST['d_loc']))
{
  $dError="This field is mandatory.";
}
if(empty($_POST['category']))
{
  $eError="This field is mandatory.";
}
if(empty($_POST['type']))
{
  $fError="This field is mandatory.";
}


if(!empty($_POST['o_date']) && !empty($_POST['d_date']) && !empty($_POST['o_loc']) && !empty($_POST['d_loc']) && !empty($_POST['category']) && !empty($_POST['type']))
{
   $odate=$_POST['o_date'];
   $ddate=$_POST['d_date'];
   $oloc=$_POST['o_loc'];
   $dloc=$_POST['d_loc'];
   $category=$_POST['category'];
   $type=$_POST['type'];
  
   $sql="INSERT INTO logistics (order_date,delivery_date,order_location,delivery_location,shifting_type,shifting_size) VALUES ('$odate','$ddate','$oloc','$dloc','$category','$type') ";
   $query=$con->query($sql); 
   if($query)
   {
    header("Location:orderconfirm.php");
   $status="Successfully Completed";
   }
   else
   $status= "Error Occured";
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New order</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="Resources/css/order.css">
`</head>
<body>

<div class="container-fluid bg ">
    <div class="row">
        <div class="col-md-4 col-sm-12 col-xs-12">
            
        </div>
        <div class="col-md-4 col-sm-12 col-xs-12">
        <!--form start-->
        <form class="form-container" method="post" action="order.php">
        <div class="form-group">
            <label for="odate">Order Date</label>
            <input type="text" class="form-control" name="o_date" id="odate" placeholder="YYYY-MM-DD">
            <div class="error">  <?=$aError?></div>
          
          </div>
           <div class="form-group">
            <label for="ddate">Delivery Date</label>
            <input type="text" class="form-control" name="d_date" id="ddate" placeholder="YYYY-MM-DD">
            <div class="error"> <?=$bError?></div>
           
          </div>
           <div class="form-group">
            <label for="oloc">Order Location</label>
            <input type="text" class="form-control" name="o_loc" id="oloc" placeholder="Enter Pick-Up Location">
            <div class="error">  <?=$cError?></div>
          
          </div>
           <div class="form-group">
            <label for="dloc">Delivery Location</label>
            <input type="text" class="form-control" name="d_loc" id="dloc" placeholder="Enter Delivary Location">
            <div class="error"> <?=$dError?></div>
           
          </div>
          
          <div class="form-group">
            <label for="qty">Shifting Type</label>
            <select class="category" name="category">
                    <option value="">Choose option</option>
                    <option value="Household">Household</option>
                    <option value="Vehicle">Vehicle</option>
                    <option value="Household + Vehicle">Household + Vehicle </option>
                    

                  </select>
                  <div class="error">   <?=$eError?></div>
               
          </div>
          <div class="form-group">
            <label for="qty">Shifting Size</label>  <select class="category" name="type">
                    <option value="">Choose option</option>
                    <option value="Few Items">Few Items</option>
                    <option value="All Items">All Items</option>
                   
                  </select>
                  <div class="error">   <?=$fError?></div>
               

          </div>
          
           <div class="form-group">
          <input type="submit"  name="submit" class="btn-logout btn" value="SUBMIT">
            
            
            
        </div>
        </form>
        <!-- form end -->
        </div>
        <div class="col-md-4 col-sm-12 col-xs-12">
            
        </div>
    </div>
</div>    
</body>
</html>
