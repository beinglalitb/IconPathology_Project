<div class="my-5">
    <h1 class="text-center"> Services </h1>
</div>
<div class="container-fluid mb-5">
    <div class="row">
        <div class="col-10 mx-auto">
            <div class="row gy-4">
                <?php 
        // Fetching available rooms
        $sql = "SELECT * FROM `services`";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result))
        {
            $id = $row['s_id'];
            $name = $row['s_name'];
          echo
          '<div class="col-md-4 col-10 mx-auto">
          <div class="card"> 
          <img src="images/services/'. $name .'.png" class="card-img-top" alt="">
          <div class="card-body">
          <center>
          <h5 class="card-title font-weight-bold mb-3">'. $name .'</h5>
          <center>';
          if(isset($_SESSION['u_id'])): 
          echo
          '<a href="booking.php?serviceid=' . $id . '" class="btn btn-primary">Book Now</a>';
          else:
          echo
          '<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#loginModal">Book Now</button>';
          endif;
          echo'
          </div>
          </div>
          </div>'; 
        }
        ?>
            </div>
        </div>
    </div>
</div>
<style>
.card{
    border-radius: 4px;
    background: #fff;
    box-shadow: 0 6px 10px rgba(0,0,0,.08), 0 0 6px rgba(0,0,0,.05);
      transition: .3s transform cubic-bezier(.155,1.105,.295,1.12),.3s box-shadow,.3s -webkit-transform cubic-bezier(.155,1.105,.295,1.12);
 
  cursor: pointer;
}

.card:hover{
     transform: scale(1.05);
  box-shadow: 0 10px 20px rgba(0,0,0,.12), 0 4px 8px rgba(0,0,0,.06);
}
  </style>