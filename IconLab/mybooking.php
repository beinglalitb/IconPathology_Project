<?php
include 'includes/_dbconnect.php';
session_start();
?>

<!doctype html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.82.0">
    <title>Icon Lab</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }
    </style>

</head>

<body class="d-flex flex-column h-100">

    <?php include "includes/_navbar.php"; ?>

    <!-- Begin page content -->
    <main class="flex-shrink-0">
        <div class="container">
            <div class="my-3">
                <h1 class="text-center">Your Bookings</h1>
                <?php
 				if(isset($_GET['bookingsuccess']) && $_GET['bookingsuccess']=="true")
				 {
 					echo  '<div class="alert alert-success alert-dismissible fade show" role="alert">
 					<strong>Success!</strong> You have successfully booked.
 					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
 					</div>';
 				}
 				if(isset($_GET['checkoutsuccess']) && $_GET['checkoutsuccess']=="true")
				 {
 					echo  '<div class="alert alert-success alert-dismissible fade show" role="alert">
 					<strong>Success!</strong> You have successfully done payment.
 					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
 					</div>';
 				}
 				?>
            </div>
            <?php
			// Fetching user bookings
 			$userid = $_SESSION['u_id'];
 			$sql = "SELECT `sb_id`, `s_name`, `sb_date`, `isPaid` FROM `services`, `service_booking` WHERE `sbs_id`=`s_id` AND `sbu_id`= '$userid' ORDER BY `service_booking`.`isPaid` ASC";
 			$result = mysqli_query($conn, $sql);
 			if( mysqli_num_rows($result) == 0)
			 // If no bookings done by user all of time 
			 {
 				echo
				'<div class="alert alert-warning alert-dismissible fade show" role="alert">
 				<strong>No Data Found</strong> You havent booked yet.
 				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
 				</div>';
 			}
 			else
			 {
 				echo
				'<div class="row">
				<div class="col-10 mx-auto">
				<div class="row gy-4">';
 				$i = 0;
 				while($i < mysqli_num_rows($result))
				{
 					$i++;
 					$row = mysqli_fetch_assoc($result);
 					$s_id = $row['sb_id'];
 					$s_name = $row['s_name'];
 					$sb_date = $row['sb_date'];
 					$isPaid = $row['isPaid'];
 					if($isPaid == 0)
					 // If bookings done by user - active
 					{
 						echo 
						'<hr>
						<div class="col-md-4 col-10 mx-auto">
 						<ul class="list-group">
 						<li class="list-group-item active" aria-current="true">Your Active Bookings</li>
 						<li class="list-group-item">You booked ' . $s_name . ' Service</li>
 						<li class="list-group-item">Your Appointment date is ' . $sb_date . '</li>
 						<a class="btn btn-outline-danger" href="payment.php?bookingid=' . $s_id . '" role="button">Pay Online</a>
 						</ul> 
               			</div>';
 					}
 					if($isPaid == 1) 
					 // If bookings done by user - history
                        {
                           echo
						   '<hr>
						   <div class="col-md-4 col-10 mx-auto">
                           <ul class="list-group">
                           <li class="list-group-item disabled" aria-disabled="true">Your Paid Payment History</li>
                           <li class="list-group-item">You booked ' . $s_name . ' Service</li>
                           <li class="list-group-item">Your Appointment date is ' . $sb_date . '</li>
                           </ul>
						   </div>';
                   		}
                }
               echo
			   '</div>
			    </div>
				</div>';
           }
           ?>
        </div>
    </main>

    <?php include "includes/_footer.php"; ?>

    <script src="js/bootstrap.bundle.min.js"></script>

</body>

</html>