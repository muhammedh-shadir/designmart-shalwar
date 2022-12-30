<?php require("validate_user.php"); ?>
<?php require("db_connection.php"); ?>
<?php include("header.php"); ?>
<div class="container-xxl flex-grow-1 container-p-y">
  <div class="row">
    <div class="col-lg-12 mb-4 order-0">
      <div class="card">
        <div class="d-flex align-items-end row">
          <div class="col-sm-12">
            <div class="card-body">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Customer Details /</span> Customer List</h4>
                <table class="table table-striped">
                  <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>No</th>
                    <th>Street</th>
                    <th>City</th>
                    <th>Zip Code</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Password</th>
                  </tr>
                    <?php

                      $sql  = "select * from customer_list";

                      $rs = $mysqli->query($sql);

                      if (mysqli_num_rows($rs) > 0) {
                        while ($row = mysqli_fetch_assoc($rs)) {
                        ?>
                          <tr>
                            <td><?php echo $row['first_name'] ?></td>
                            <td><?php echo $row['last_name'] ?></td>
                            <td><?php echo $row['no'] ?></td>
                            <td><?php echo $row['street'] ?></td>
                            <td><?php echo $row['city'] ?></td>
                            <td><?php echo $row['zip_code'] ?></td>
                            <td><?php echo $row['phone'] ?></td>
                            <td><?php echo $row['email'] ?></td>
                            <td><?php echo $row['pass_code'] ?></td>
                          </tr>
                        <?php
                        }
                      }
                      else {
                        echo "<tr>";
                        echo "<td colspan=10 class='text-danger text-center'>No records were found</td>";
                        echo "</tr>";
                      }
                     ?>
                </table>
            </div>
          </div>

        </div>
      </div>
    </div>
</div>
<!-- / Content -->


<div class="content-backdrop fade"></div>
</div>

<?php include("footer.php") ?>
