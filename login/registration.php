<?php
session_start();
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'registration');
$name = $_POST['user'];
$pass = $_POST['password'];
$s = " select * from usertable where name = '$name'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);
if ($num == 1) {
    header('location:../404page/error.php');
}
else {
    $reg = " insert into usertable(name , password) values ('$name' , '$pass')";
    mysqli_query($con,$reg);
    header('location:../404page/successful.php');
}
?>