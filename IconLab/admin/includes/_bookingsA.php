<table class="table table-success table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Customer Name</th>
       <th scope="col">Service Name</th>
      <th scope="col">Phone No</th>
      <th scope="col">Checkin Date</th>
    </tr>
  </thead>
  <tbody>

    <?php
    $sql3 = "SELECT * FROM service_booking,services WHERE sbs_id=s_id AND isPaid=0";
    $result3 = mysqli_query($conn, $sql3);
    $count = 0;

    while($row = mysqli_fetch_assoc($result3))

    {
         //services
      $count = $count+1;
      $s_id = $row['s_id'];
      $s_name = $row['s_name'];

        //booking
      $b_id = $row['sb_id'];
      $bu_id = $row['sbu_id'];
      $br_id = $row['sbs_id'];
      $bu_name = $row['sb_name'];
      $bu_address = $row['sb_address'];
      $bu_phno = $row['sb_phno'];
      $bu_gender = $row['sb_gender'];
      $sb_date = $row['sb_date'];
      $isPaid = $row['isPaid'];

      echo '<tr>
      <th scope="row">' .$count. '</th>
      <td>' .$bu_name. '</td>
       <td>' .$s_name. '</td>
      <td>' .$bu_phno. '</td>
      <td>' .$sb_date. '</td>
      </tr>';

    } 
    ?>
  </tbody>
</table>