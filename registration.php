<?php 
session_start();
include('includes/config.php');
error_reporting(0);


mysqli_select_db($con, 'sell_your_gear');


$name = $_POST['user'];
$pass = $_POST['password'];

$s = " select * from tbleuser where name = '$name'";


$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
  echo " Username Already taken";
}else{
  $reg= " insert into tbleuser(name , password) values('$name' , '$pass')";
  mysqli_query($con, $reg);
  echo" Registration Successful";
}







?>