<?php
   
$con= mysqli_connect('localhost','root');
  if($con){
      echo "Connection successful";
  }else{
      echo "No connection";
  }
  mysqli_select_db($con,'contactinfo');
  $user=$_POST['user'];
  $email=$_POST['email'];
  $comment=$_POST['comment'];

  $query = " INSERT INTO userinfo (user, email, comment) VALUES ('$user','$email','$comment') ";
  mysqli_query($con,$query);
  echo "$query";
  mysqli_query($con,$query);
  header('location:index.php');

?>