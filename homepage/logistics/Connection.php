<?php
$ServerName="localhost";
$User="root";
$password="";
$Database="db_smartdrive";//database name
$con=mysqli_connect($ServerName,$User,$password,$Database);
if(!$con)
{
	echo "DataBase Connection Error";
}
?>