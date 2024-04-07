

<?php 
include "bheader.php";
include "session.php";
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'mini-project');
$sql= "SELECT * FROM payment";
$featured=$con->query($sql);
if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit']))
{
  $w_id=$_POST['worker_id'];
  $c_id=$_POST['user_id'];
  $rating=$_POST['rating'];
  $comment=$_POST['comment'];
    $sql="INSERT INTO review (workers_id,user_id,rating,comment)VALUES('$w_id','$c_id','$rating','$comment') ";
    $query=$con->query($sql);
    $sql="UPDATE payment set status=1 where workers_id ='$w_id'  ";
    $query=$con->query($sql);
    header("Refresh:0");
    
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style_staff.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    <div class="container">
      <h2 style="text-align: center;">Orders List</h2>
        <div class="listing">
        <table class="table" style="background-color: lightgrey; border-radius: 1rem;">
  <thead>
    <tr style="font-size: large;">
      <th scope="col">Order ID</th>
      <th scope="col">Category</th>
      <th scope="col">Name</th>
      <th scope="col">Amount</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
    <tbody>

      <?php
       while($order_details=mysqli_fetch_assoc($featured)):
        if(!$order_details['status'])
        {
      ?>
      <tr>
      <th scope="row"><?php echo $order_details['id']; ?></th>
      <th scope="row"><?php echo $order_details['category'] ?></th>
      <th scope="row"><?= $order_details['fname'];  ?> <?php echo $order_details['lname'];  ?></th>
      <th scope="row">₹<?php echo $order_details['amount']; ?></th>
      <form action="" method="POST"> 
        <th><select class="category" name="rating" type="hidden">
                    <option disabled>Choose option</option>
                    <option value="5">☆☆☆☆☆</option>
                    <option value="4">☆☆☆☆</option>
                    <option value="3">☆☆☆</option>
                    <option value="2">☆☆</option>
                    <option value="1">☆</option>
                     </select></th>
      <th scope="row"> <textarea name="comment" placeholder="write a comment." id="" cols="40" rows="5"></textarea></th>
      <input type="hidden" name="worker_id" value="<?=$order_details['workers_id']?>">
      <input type="hidden" name="user_id" value="<?=$order_details['customer_id']?>">
      <th><button class="btn btn-info" type="submit" name="submit">send</button></th></form>
      <th>
      </th>
      </tr>
      <?php } else {?>
        <tr>
      <th scope="row"><?php echo $order_details['id']; ?></th>
      <th scope="row"><?php echo $order_details['category'] ?></th>
      <th scope="row"><?= $order_details['fname'];  ?> <?php echo $order_details['lname'];  ?></th>
      <th scope="row">₹<?php echo $order_details['amount']; ?></th>
        </tr>
        <?php }?>
      <?php endwhile;?></th>
     
      
    </tbody>
  </thead>
    </table>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>