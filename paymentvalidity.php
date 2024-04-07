<?php
$cvvError = "";
$expireError = "";
$cardError = "";
$valid = 1;
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
function isValidCardNumber($number)
{
    return preg_match('/^[0-9]{16}$/', $number);
}
function isValidCvv($cvv)
{
    // Check if cvv is 3 or 4 digits
    return preg_match("/^[0-9]{3,4}$/", $cvv);
}
function isValidExpiryDate($expiryDate)
{
    if (preg_match('/^(0[1-9]|1[0-2])\/?([0-9]{4}|[0-9]{2})$/', $expiryDate)) {
        $parts = explode("/", $expiryDate);
        if (count($parts) == 2) {
            $month = $parts[0];
            $year = $parts[1];
            $currentYear = date("Y");
            $currentMonth = date("m");
            if ($year < $currentYear || ($year == $currentYear && $month < $currentMonth)) {
                return false; // The card is expired
            }
            return true; // The card is not expired
        }
    }
    return false; // Invalid date format
}

// $con = mysqli_connect('localhost', 'root');
// mysqli_select_db($con, 'mini-project');
// $sql = "SELECT * FROM payment ";
// $featured = $con->query($sql);

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    if (!empty($_POST['cvv']) && !empty($_POST['card_no'])  && !empty($_POST['expire'])) {
        $card = test_input($_POST['card_no']);
        $cvv = test_input($_POST['cvv']);
        $expire = test_input($_POST['expire']);
        if (!isValidCardNumber($card)) {
            $cardError = "Card number is not valid.";
            $valid = 0;
        }
        if (!isValidCvv($cvv)) {
            $cvvError = "cvv number is not valid.";
            $valid = 0;
        }
        if (!isValidExpiryDate($expire)) {
            $expireError = "expire date is not correct.";
            $valid = 0;
        }
    } else {
        $cardError = "Field is empty";
        $cvvError = "Field is empty";
        $expireError = "Field is empty";
        $valid = 0;
    }
    if ($valid == 1) {
        $card_no = $_POST['card_no'];
        $expire = $_POST['expire'];
        $cvv = $_POST['cvv'];
        session_start();
        $id = $_SESSION['userid'];
        $amount = $_POST['amount'];
        $work_id=$_POST['worker_id'];
        $category=$_POST['category'];
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $con=mysqli_connect('localhost','root');
mysqli_select_db($con,'mini-project');
        $sql = "INSERT INTO payment (customer_id,workers_id,category,fname,lname,card_no,cvv,expire,amount) VALUES('$id','$work_id','$category','$fname','$lname','$card_no','$cvv','$expire','$amount')";
        $query = $con->query($sql);
        header("Location:./paymentsuccess.php");
      }
    
}
?>