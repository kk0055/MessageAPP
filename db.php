<?php

$conn = mysqli_connect('localhost','root','','messageapp');

if(mysqli_connect_errno()){
  echo 'DB connection Error:' .mysqli_connect_error();
}
?>