<?php
session_start();
if(!isset($_SESSION['userid']))
header("Location: /daily_assist/homepage/login/loginn.php?link=0");
?>