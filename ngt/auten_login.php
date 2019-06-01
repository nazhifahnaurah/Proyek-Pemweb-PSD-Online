<?php
require ('db_connect.php');

if(isset($_POST['user_id']) and isset($_POST['user_pass'])){
  $username = $_POST['user_id'];
  $password = $_POST['user_pass'];
  $query = "SELECT * FROM login WHERE username='$username' and user_pass='$password'";

  $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
  $count = mysqli_num_rows($result);

  if($count==1){
    echo "<script type='text/javascript'>alert('Login Credentials Verified')</script>";
    $query ="UPDATE user SET status_lgin='1' WHERE user_id='$username'";
		$result= mysqli_query($connection,$query) or die(mysqli_error($connection));
		session_start();
		$_SESSION['login_user']= $username;
   // echo "<input type='submit' value='go to mainserver' action ='index.php' >";
    header("Location: index.html");

  } else {
    echo "<script type='text/javascript'>alert('Invalid Login Credentials')</script>";
  }
}
?>