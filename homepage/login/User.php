<?php include "Connection.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="user_style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/daily_assist/homepage/homepage1.php">Home <span class="sr-only">(current)</span></a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="main">
    <div class="registration-form">
      <div class="row">
        <div class="section-2">

        </div>
        <div class="section-1 col-6">
          <form action="" method="POST">
            <br>
            <h1>Registration Form</h1><br>
            <div class="row-1">
              <div class="row ">
                <div class="col-6 row-0-0">
                  <input type="text" placeholder="Name" name="fname">
                  <p class="error"><?= $fnameErr ?></p>
                </div>
              </div>
            </div>
            <div class="row-2">
              <div class="row ">
                <div class="col-6 row-1-0">
                  <input type="text" placeholder="Email" name="email">
                  <p class="error"><?= $emailErr ?></p>
                </div>
              </div>
            </div>
            <div class="row-3">
              <div class="row ">
                <div class="col-6 row-2-0">
                  <textarea type="text" placeholder="Address" name="address" rows="4" cols="22"></textarea>
                  <p class="error"><?= $addressErr ?></p>
                </div>
              </div>
            </div>
            <div class="row-4">
              <div class="row ">
                <div class="col-6 row-3-0">
                  <input type="text" placeholder="Phone Number" name="phone">
                  <p class="error"><?= $phoneErr ?></p>
                </div>
                <div class="col-6 row-4-2">
                  <input type="password" placeholder="Password" name="password">
                  <p class="error"><?= $passwordErr ?></p>
                </div>
              </div>
            </div>
            <div class="row-5">
              <div class="row ">
                <div class="col-12 buttonhead">
                  <button class="button" type="submit" name="submit">Register</button>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
    <div class="status"><?= $status ?></div>
  </div>
  </form>

  </div>





  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>