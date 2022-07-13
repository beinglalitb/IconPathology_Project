<table class="table table-success table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Customer Name</th>
      <th scope="col">Phone No</th>
      <th scope="col">Payment Date</th>
      <th scope="col">Payment Details</th>
    </tr>
  </thead>
  <tbody>

    <?php
    $sql4 = "SELECT * FROM service_booking, payment WHERE isPaid=1 AND sb_id=psb_id";
    $result4 = mysqli_query($conn, $sql4);
    $count = 0;

    while($row = mysqli_fetch_assoc($result4))

    {
        //booking
       $count = $count+1;
       $b_id = $row['sb_id'];
      $bu_id = $row['sbu_id'];
      $br_id = $row['sbs_id'];
      $bu_name = $row['sb_name'];
      $bu_address = $row['sb_address'];
      $bu_phno = $row['sb_phno'];
      $bu_gender = $row['sb_gender'];
      $sb_date = $row['sb_date'];
      $isPaid = $row['isPaid'];
      //payments
      $p_id = $row['p_id'];
      $pu_id = $row['pu_id'];
      $sb_id = $row['sb_id'];
      $p_amt = $row['p_amt'];
      $p_mode = $row['p_mode'];
      $p_date = $row['p_date'];

      echo '<tr>
      <th scope="row">' .$count. '</th>
      <td>' . $bu_name. '</td>
      <td>' .$bu_phno. '</td>
      <td>' .$p_date. '</td>
      <td>
      <div class="accordion accordion-flush" id="accordionFlushExample">
      <div class="accordion-item">
      <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse'.  $count  .'" aria-expanded="false" aria-controls="flush-collapseOne">
      Payment Details
      </button>
      </h2>
      <div id="flush-collapse'.  $count  .'" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
      <ul class="list-group list-group-flush">
      <li class="list-group-item">Payment Amount-'.  $p_amt  .'&#8377</li>
      <li class="list-group-item">Payment Mode-'.  $p_mode  .'</li>
      </ul>
      </div>
      </div>
      </div>
      </div>
      </td>
      </tr>';

    } 
    ?>
  </tbody>
</table>