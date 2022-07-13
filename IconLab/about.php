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
    <title>Hotel SunRise</title>

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

   <!--About us-->
    <section class="main_heading my-4 ">
      <div class=" text-center">
        <h1 class="display-6 "> <b>About Us</b> </h1>
        <hr class="w-25 mx-auto"/>
      </div>

      <div class="container ">
        <div class="row my-5">
          <div class="col-lg-6 col-md-6 col-12 col-xxl-6  d-flex justify-content-center align-items-cente">
            <figure>
              <img src="images/au.jpg" alt="about_us_img "class="img-fluid about_img">
            </figure> 
          </div>

            <div class="col-lg-6 col-md-6 col-12 col-xxl-6 d-flex justify-content-around align-items-start flex-column">
            <h1><b>Our Journey</b></h1>
            <p>
              V-Care Pathology Laboratory has been providing medical laboratory services on Sinhagad road since its inception in 1999. It began operations at Chanakyanagari and shifted base to Mohite Paradise where it operated till 2015. In March 2015, it shifted to Mohite Paradise, office no 11 where it is presently situated.
            </p>

            <p>
              With a patient, competent and caring staff, congenial atmosphere, convenient location and accurate reporting, it has made a name for itself on Sinhagad road. A variety of blood tests, urine tests, body fluid tests, histopathology, microbiology and others are on offer under its roof.
            </p>

            <p>
              In case patients are unable to visit the laboratory, it provides services for collection of blood at home for a nominal fee. Facility for sending reports by e-mail is also available.  
            </p>

           
          </div>                    
        </div>
      </div>

      <div class="container">
        <div class="row">
          
          <div id="navbar-example" style="position: relative;">
            
            <nav id="navbar-example2" class="navbar navbar-light bg-light px-3">
              <a class="navbar-brand" href="#">Navbar</a>
              <ul class="nav nav-pills">
                <li class="nav-item">
                  <a class="nav-link" href="#scrollspyHeading1">First</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#scrollspyHeading2">Second</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Dropdown</a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#scrollspyHeading3">Third</a></li>
                    <li><a class="dropdown-item" href="#scrollspyHeading4">Fourth</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#scrollspyHeading5">Fifth</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
            <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0"  tabindex="0" style="height: 300px; overflow-y: scroll;">
              <h4 id="scrollspyHeading1">First heading</h4>
              <p>V-Care Pathology Laboratory is an initiative of Dr Shilpa Patel Fernandes. She completed her M.B.B.S. from Government Medical College, Miraj in 1992. Thereafter, she enrolled for an M.D. in Pathology at the Government Medical College, Miraj for three years and was conferred this post graduate degree by Shivaji University, Kolhapur. She is registered with the Maharashtra Medical Council to practice Pathology. Hematology, cytology and histopathology are her areas of interest. She regularly updates herself in these fields by attending and participating in workshops and conferences at state and national level.</p>
              <h4 id="scrollspyHeading2">Second heading</h4>
              <p>V-Care Pathology Laboratory is an initiative of Dr Shilpa Patel Fernandes. She completed her M.B.B.S. from Government Medical College, Miraj in 1992. Thereafter, she enrolled for an M.D. in Pathology at the Government Medical College, Miraj for three years and was conferred this post graduate degree by Shivaji University, Kolhapur. She is registered with the Maharashtra Medical Council to practice Pathology. Hematology, cytology and histopathology are her areas of interest. She regularly updates herself in these fields by attending and participating in workshops and conferences at state and national level.</p>
              <h4 id="scrollspyHeading3">Thidd heading</h4>
              <p>V-Care Pathology Laboratory is an initiative of Dr Shilpa Patel Fernandes. She completed her M.B.B.S. from Government Medical College, Miraj in 1992. Thereafter, she enrolled for an M.D. in Pathology at the Government Medical College, Miraj for three years and was conferred this post graduate degree by Shivaji University, Kolhapur. She is registered with the Maharashtra Medical Council to practice Pathology. Hematology, cytology and histopathology are her areas of interest. She regularly updates herself in these fields by attending and participating in workshops and conferences at state and national level.</p>
              <h4 id="scrollspyHeading4">Fourth heading</h4>
              <p>V-Care Pathology Laboratory is an initiative of Dr Shilpa Patel Fernandes. She completed her M.B.B.S. from Government Medical College, Miraj in 1992. Thereafter, she enrolled for an M.D. in Pathology at the Government Medical College, Miraj for three years and was conferred this post graduate degree by Shivaji University, Kolhapur. She is registered with the Maharashtra Medical Council to practice Pathology. Hematology, cytology and histopathology are her areas of interest. She regularly updates herself in these fields by attending and participating in workshops and conferences at state and national level.</p>
              <h4 id="scrollspyHeading5">Fifth heading</h4>
              <p>V-Care Pathology Laboratory is an initiative of Dr Shilpa Patel Fernandes. She completed her M.B.B.S. from Government Medical College, Miraj in 1992. Thereafter, she enrolled for an M.D. in Pathology at the Government Medical College, Miraj for three years and was conferred this post graduate degree by Shivaji University, Kolhapur. She is registered with the Maharashtra Medical Council to practice Pathology. Hematology, cytology and histopathology are her areas of interest. She regularly updates herself in these fields by attending and participating in workshops and conferences at state and national level.</p>
            </div>
          
        </div>
        </div>      
      </div>

    </section>

    <?php include "includes/_footer.php"; ?>

    <script src="js/bootstrap.bundle.min.js"></script>

</body>

</html>