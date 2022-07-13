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
        <link href="admin/index.css" rel="stylesheet">

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

        <?php
        //Getting bookingid for payment purpose
        $bookingid = $_GET['bookingid'];
        
        $sql ="SELECT * FROM `service_booking` WHERE `sb_id`='$bookingid'";
        $sql2="SELECT `Test`,`t_name`,`t_price` from `test`, `service_booking` where `Test`=`t_name`";

        $result = mysqli_query($conn,$sql);
        $result2 = mysqli_query($conn,$sql2);
         while($row = mysqli_fetch_assoc($result))
         {
            $s_id = $row['sbs_id'];
              $name = $row['sb_name']; 
            $phno = $row['sb_phno'];
            $date = $row['sb_date']; 
         }
        while($row = mysqli_fetch_assoc($result2))
        {
           
            $price = $row['t_price'];
        }

        ?>

        <div class="my-5">
            <h1 class="text-center">Payment</h1>
        </div>
        <div class="container-fluid">
            <div class="row" id="header">
                <div class="col-10 mx-auto">
                    <div class="row">
                        <div class="col-md-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex justify-content-center flex-column">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <h5>Customer Name:</h5>
                                    <h6 class="text-info"><?php echo $name;?></h6>
                                </li>
                                <li class="list-group-item">
                                    <h5> Mobile No:</h5>
                                    <h6 class="text-info"><?php echo $phno;?></h6>
                                </li>
                                <li class="list-group-item">
                                    <h5> Booking Date:</h5>
                                    <h6 class="text-info"><?php echo $date;?></h6>
                                </li>

                                <li class="list-group-item">
                                    <h5> Amount:</h5>
                                    <h6 class="text-info">&#8377;
                                        <?php echo $price;?>
                                    </h6>
                                </li>
                                <li class="list-group-item">
                                    <h5> Payment Mode: </h5>
                                    <form method="POST" action="includes/_handlePayment.php">
                                        <input type="hidden" name="serviceid" value="<?php echo $s_id;?>">
                                        <input type="hidden" name="bookingId" value="<?php echo $bookingid;?>">
                                        <?php echo '<input type="hidden" name="bookingUser" value="' . $_SESSION['u_id'] . '">';?>
                                        <input type="hidden" name="payAmount" value="<?php echo $price;?>">
                                        <div>
                                            <h6 class="text-info">
                                                <input type="radio" name="payMode" value="cash" required>
                                                <label for="cash">Cash</label>
                                            </h6>
                                        </div>
                                        <div>
                                            <h6 class="text-info">
                                                <input type="radio" name="payMode" value="card" required>
                                                <label for="card">Card</label>
                                            </h6>
                                        </div>
                                        <input type="hidden" name="pdate" value="<?php echo $date;?>">
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-outline-danger">Confirm
                                            Payment</button>
                                        </div>
                                    </form>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 header-img">
                            <img src="images/payment1.jpg" class="img-fluid animated" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include "includes/_footer.php"; ?>

    <script src="js/bootstrap.bundle.min.js"></script>

</body>

</html>



