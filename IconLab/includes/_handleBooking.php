<?php

$showError = "false";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  include '_dbconnect.php';

  $userid = $_POST['userid'];
  $roomid = $_POST['serviceid'];
  $name = $_POST['name'];
  $address = $_POST['address'];
  $phno = $_POST['phno'];
  $gender = $_POST['gender'];
  $test = $_POST['ttype'];
  $time = $_POST['time'];
  $indate = $_POST['indate'];
  $indaten = date("Y-m-d", strtotime($indate));   

  $sql = "INSERT INTO `service_booking`(`sbu_id`, `sbs_id`, `sb_name`, `sb_address`, `sb_phno`, `sb_gender`, `Test`, `Time`, `sb_date`) VALUES ('$userid','$roomid','$name','$address','$phno','$gender','$test','$time','$indaten')";
  $sql2 = "select * from `test` where `t_name`='$test'";
 
  $result = mysqli_query($conn, $sql);
  $result2 = mysqli_query($conn, $sql2);
  
  if($result && $result2)
  {
     $_SESSION['t_id'] = $row['t_id'];
      header("Location: /IconLab/mybooking.php?bookingsuccess=true");
    exit();
  }
}

?>