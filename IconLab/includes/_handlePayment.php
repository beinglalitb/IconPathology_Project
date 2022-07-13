<?php

$showError = "false";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  include '_dbconnect.php';

  //$s_id = $_POST['serviceid'];
  $bookingUser = $_POST['bookingUser'];
  $bookingId = $_POST['bookingId'];
  $payAmount = $_POST['payAmount'];
  $payMode = $_POST['payMode'];
  $Date = $_POST['pdate'];
  $daten = date("Y-m-d", strtotime($Date));   

  $sql = "INSERT INTO `payment`(`pu_id`, `psb_id`, `p_amt`, `p_mode`, `p_date`) VALUES ('$bookingUser', '$bookingId', '$payAmount', '$payMode', '$daten')";
  $sql2 = "UPDATE `service_booking` SET `isPaid`='1' WHERE `sb_id`='$bookingId'";

  $result = mysqli_query($conn, $sql);
  $result2 = mysqli_query($conn, $sql2);
  
  if($result && $result2)
  {
    header("Location: /IconLab/mybooking.php?checkoutsuccess=true");
    exit();
  }
}

?>