<?php include '../connection.php';
include "D:/xampp/htdocs/daily_assist/bheader.php";
include "D:/xampp/htdocs/daily_assist/session.php" ;

$sql = "SELECT * FROM workers WHERE category='Baby care taker' ";
$featured = $con->query($sql);
$featured1 = $con->query($sql);
$data_array = array();

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/worker.css">

</head>

<body>
  <div class="main">
    <div class="head">
      <div class="section-1">
        <h1>Baby Care Taker</h1> <br>
        <p> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
            <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
          </svg> <a href="#"> &nbsp;
            <?php while ($plumber_details = mysqli_fetch_assoc($featured))
{
  $data_array[] = $plumber_details;
  $w_id=$plumber_details['id'];
  $sql="SELECT rating FROM review where workers_id= $w_id ";
  $featured3 = $con->query($sql);
  $rate = 0;
  $y = 0;
  $n = 0;
  while($array = mysqli_fetch_assoc($featured3))
  {
    $x = $array['rating'];

              $rate = $rate + $x;
              $y++; 
  }
  if($y==0)
  $rate=0;
  else
  $rate = $rate / $y;
  $sql="UPDATE workers set rating =$rate where id='$w_id' ";
  $query = $con->query($sql);

}
?>
            <?php
            $rate = 0;
            $y = 0;
            $n = 0;
            while ($plumber_details = mysqli_fetch_assoc($featured1)) {
              $x = $plumber_details['rating'];
              $rate = $rate + $x;
              $y++;
            }
            if ($rate != 0) {
              $rate = $rate / $y;
              $rate=round($rate,2);
              echo "" . $rate . " (13.4m Booking)";
            } ?>
          </a>

        </p>
      </div>
      <div class="babycaretaker-section-2">
      </div>

    </div>
    <div class="listing">
      <table class="table">
        <thead>
          <tr style="font-size: large;">
            <th scope="col"></th>
            <th scope="col">Name</th>
            <th scope="col">Experience</th>
            <th scope="col">Rating</th>
            <th scope="col">Wage</th>
            <th scope="col"></th>
          </tr>
        <tbody>
          <?php
          foreach ($data_array as $plumber_details) :
          ?>
            <tr>
              <th scope="row"><?php $n++;
                              echo $n; ?></th>
              <th scope="row"><?php echo $plumber_details['fname'] . " " . $plumber_details['lname'];  ?></th>
              <th scope="row"><?= $plumber_details['experience'];  ?>&nbsp;yr</th>
              <?php $w_id = $plumber_details['id'];
      $rating=$plumber_details['rating'] ?>
              <th scope="row" ><?php echo'<a href="/daily_assist/review.php?worker='.urlencode($w_id).'" style="color:lightgreen ;"> '.$rating.'</a>'?></th>
              <th scope="row">₹<?= $plumber_details['price'];  ?></th>
              <th>
                <form action="/daily_assist/payment.php" method="GET">
                  <input type="hidden" name="worker_id" value="<?=$w_id?>" >
                  <button type="submit" class="btn btn-success">book</button>
                </form>
              </th>

            </tr>
          <?php endforeach; ?>
        </tbody>
        </thead>
      </table>
    </div>
  </div>
  <?php include '../footer.php'; ?>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>