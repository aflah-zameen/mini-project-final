<?php
include "bheader.php";
include "paymentvalidity.php";
include "D:/xampp/htdocs/daily_assist/session.php" ;
$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con, 'mini-project');
$worker_id=$_REQUEST['worker_id'];
$sql="SELECT * from  workers where id='$worker_id'";
$query=$con->query($sql);
$array=mysqli_fetch_assoc($query);
$amount=$array['price'];
$category=$array['category'];
$fname=$array['fname'];
$lname=$array['lname'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Document</title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
</head>
<style>
	span{
		font-size: .8rem;
		color: orange;
	};
</style>
<body>
	<div class="container-fluid">
		<form method="POST" action="">
			<section style="background-color: #d1d1d1;margin-top: 10rem;">
				<div class="container py-5">
					<div class="row d-flex justify-content-center">
						<div class="col-md-9 col-lg-7 col-xl-5">
							<div class="card">
								<div class="card-body">
									<div class="card-title d-flex justify-content-between mb-0">
										<p class="text-muted mb-0">Total</p>
										<p class="mb-0" style="color:green; font-weight:bold;"><?=$amount?></p>
									</div>
								</div>
								<div class="rounded-bottom" style="background-color: #eee;">
									<div class="card-body">
										<p class="mb-4">Your payment details</p>

										<div class="form-outline mb-3">
											<input type="text" id="formControlLgXM8" class="form-control" placeholder="1234 5678 1234 5678" name="card_no" />
											<label class="form-label" for="formControlLgXM8">Card Number</label>
											<span><?=$cardError?></span>
										</div>
											<input type="hidden" name="amount" value="<?=$amount?>">
											<input type="hidden" name="worker_id" value="<?=$worker_id?>">
											<input type="hidden" name="category" value="<?=$category?>">
											<input type="hidden" name="fname" value="<?=$fname?>">
											<input type="hidden" name="lname" value="<?=$lname?>">
										<div class="row mb-3">
											<div class="col-6">
												<div class="form-outline">
													<input type="text" id="formControlLgExpk8" class="form-control" pattern="(0[1-9]|1[0-2])\/?([0-9]{4}|[0-9]{2}" placeholder="MM/YYYY" name="expire" />
													<label class="form-label" for="formControlLgExpk8">Expire</label>
													<span><?=$expireError?></span>
												</div>
											</div>
											<div class="col-6">
												<div class="form-outline">
													<input type="password" id="formControlLgcvv8" class="form-control" placeholder="Cvv" name="cvv"/>
													<label class="form-label" for="formControlLgcvv8">Cvv</label>
													<span><?=$cvvError?></span>
												</div>
											</div>
										</div>

										<button class="btn btn-info btn-block" name="submit" type="submit">Book now</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</form>
	</div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>