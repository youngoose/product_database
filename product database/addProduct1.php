<?php
  $host = 'localhost';
  $username	= '';
  $password	= '';
  $dbname =  '';
  $conn = mysqli_connect($host, $username, $password, $dbname);

  if(empty($conn)) {
    die("Connection Failed: ".mysqli_connect_error());
  }

  $order_id = $_REQUEST['order_id'];
  $productName = $_REQUEST['productName'];
  $productOrigin = $_REQUEST['productOrigin'];
  $productPrice = $_REQUEST['productPrice'];

  $query = "insert into tblFruits (order_id, productName, productOrigin, productPrice)
  values ('$order_id', '$productName', '$productOrigin', '$productPrice');";

  $result = mysqli_query($conn, $query);

  if ($result > 0){
    header("Location:addProduct.php?result=success");
  } else {
    header("Location:addProduct.php?result=fail");
  }
?>
