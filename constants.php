<?php

  session_start();
 // create constant to store from repeating values
  define('SITEURL','http://localhost/food-order/');
  define('LOCALHOST','localhost');
  define('DB_USERNAME','root');
  define('DB_PASSWORD','');
  define('DB_NAME', 'food-order');

  $conn =mysqli_connect(LOCALHOST,DB_USERNAME,DB_PASSWORD) or die(mysqli_error());
  $db_select =mysqli_select_db($conn,DB_NAME) ;
 //$res = mysqli_query($conn,$sql) or die(mysqlis_error());

?>