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
        //Getting roomid for booking purpose
        $serviceid = $_GET['serviceid'];
        $sql = "SELECT * FROM `services` WHERE `s_id`='$serviceid'";
        $result = mysqli_query($conn, $sql);

        ?>

        <div class="my-5">
            <h1 class="text-center">Book Now</h1>
        </div>
        <div class="container-fluid mb-5">
            <div class="row" id="header">
                <div class="col-xxl-8 col-10 cl-md-8 mx-auto">
                    <div class="row">
                        <div class="col-md-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex justify-content-center flex-column ">
                            <form method="POST" action="includes/_handleBooking.php">
                                <?php echo '<input type="hidden" name="userid" value="' . $_SESSION['u_id'] . '">';?>
                                <input type="hidden" name="serviceid" value="<?php echo $serviceid;?>">
                                <div class="mb-3">
                                    <label for="fullName" class="form-label">Enter Your Full Name</label>
                                    <input type="text" name="name" class="form-control" id="formGroupExampleInput"
                                    placeholder="Enter Your Full Name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="address" class="form-label">Enter Your Address</label>
                                    <textarea name="address" class="form-control" id="exampleFormControlTextarea1"
                                    rows="1" required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="phoneno" class="form-label">Mobile No.</label>
                                    <input type="tel" name="phno" class="form-control"
                                    placeholder="Enter Your Mobile No." required>
                                </div>
                                
                                <div class="mb-3">
                                    <div class="col">
                                        <label for="inputGender" class="form-label">Gender</label>
                                        <select name="gender" id="inputGender" class="form-select" required>
                                            <option></option>
                                            <option>Male</option>
                                            <option>Female</option>
                                            <option>Other</option>
                                        </select>
                                    </div>
                                </div>    
                                <div class="mb-3">
                                    <select class="form-select" aria-label="Default select example" name="ttype">
                                        <option selected>Select Test</option>
                                        <option value="COVID RTPCR">COVID RTPCR</option>
                                        <option value="ECG">ECG</option>
                                        <option value="AMMONIA">Ammonia</option>
                                        <option value="CHOLESTROL">Cholestrol</option>
                                        <option value="INSULIN">Insulin</option>
                                    </select>
                                </div>

                                <div class="mb-1">
                                    <select class="form-select" aria-label="Default select example" name="time" required>
                                        <option selected>Prefered Time</option>

                                        <option value="7.30 am">7.30 am</option>
                                        <option value="8.00 am">8.00 am</option>
                                        <option value="8.30 am">8.30 am</option>
                                        <option value="9.00 am">9.00 am </option>
                                        <option value="9.30 am">9.30 am</option>
                                        <option value="10.00 am">10.00 am</option>
                                        <option value="10.30 am">10.30 am</option>
                                        <option value="11.00 am">11.00 am</option>
                                        <option value="11.30 am">11.30 am</option>
                                        <option value="12.00 am">12.00 am</option>  
                                        <option value="12.30 pm">12.30 pm</option>
                                        <option value="1.00 pm">1.00 pm</option>
                                        <option value="1.30 pm">1.30 pm</option>
                                        <option value="2.00 pm">2.00 pm</option>
                                        <option value="2.30 pm">2.30 pm</option>
                                        <option value="3.00 pm">3.00 pm</option>
                                        <option value="3.30 pm">3.30 pm</option>
                                        <option value="4.00 pm">4.00 pm</option>
                                        <option value="4.30 pm">4.30 pm</option>
                                        <option value="5.00 pm">5.00 pm</option>
                                        <option value="5.30 pm">5.30 pm</option>

                                        <option value="6.00 pm">6.00 pm</option>
                                        <option value="6.30 pm">6.30 pm</option>
                                        <option value="7.00 pm">7.00 pm</option>
                                        <option value="7.30 pm">7.30 pm</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="checkinDate" class="form-label">Checkin Date</label>
                                    <input type="date" name="indate" class="form-control" required>
                                </div>
                                <div class="text-center">
                                    <?php if(isset($_SESSION['u_id'])): ?>
                                        <button type="submit" class="btn btn-outline-primary"
                                        style="width: 10rem;">Submit</button>
                                    <?php else: ?>
                                        <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal"
                                        data-bs-target="#loginModal" style="width: 10rem;">Login First</button>
                                    <?php endif; ?>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 header-img">
                            <img src="images/booking.svg" class="img-fluid animated" alt="">
                        </div>
                    </div>
                </div>


            </main>

            <?php include "includes/_footer.php"; ?>

            <script src="js/bootstrap.bundle.min.js"></script>

        </body>

        </html>