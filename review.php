

<?php 
include "bheader.php";
include "D:/xampp/htdocs/daily_assist/session.php" ;

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'mini-project');
$w_id=$_GET['worker'];
$sql= "SELECT * FROM review where workers_id='$w_id'";
$featured=$con->query($sql);
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
      <h2 style="text-align: center;">Reviews</h2>
        <div class="listing"  style=" border-radius: 1rem; background-color: lightblue; width:80rem; height:fit-content; padding:4rem">
        <table class="table">
  <thead>
    <tbody>

      <?php
       while($order_details=mysqli_fetch_assoc($featured)):
      ?>
      <?php
      $user_id=$order_details['user_id'];
      $sql="SELECT user_name from user where id=$user_id";
      $featured1=$con->query($sql); 
      $array =mysqli_fetch_assoc($featured1);
      ?>
      <tr >
        <th scope="row" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
</svg>&nbsp; &nbsp;<?php echo $array['user_name']."" ;?>
        </th>
      </tr>
      <tr>
      <th>
        <?php
        $userRating=$order_details['rating'];
        for ($i = 1; $i <= 5; $i++) {
            if ($i <= $userRating) {
                echo '<span style="font-size:100%;color:orange;">&starf;</span>';
            } else {
                echo '<span style="font-size:100%;color:black;">&star;</span>';
            }
        }?>
         
      </th>
      </tr>
      <tr style="background-color:#FFFFFF; font-size: .8rem; ">
      <th scope="row"><?php echo "'".$order_details['comment']."'"; ?></th>
      </tr>
      <tr>
        <th></th>
      </tr>
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