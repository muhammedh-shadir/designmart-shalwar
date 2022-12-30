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
                <table class="table table-striped">
                  <tr>
                    <th>Product ID</th>
                    <th>Name</th>
                    <th>Quanitity</th>
                    <th>Price</th>
                    <th>Color</th>
                    <th>Description</th>
                    <th>Category</th>
                    <th>Type</th>
                    <th>Picture</th>
                    <th>Actions</th>
                  </tr>
                    <?php
                      $search = $_REQUEST['search'];

                      $sql  = "select product.pid, product.p_name, product.quantity, ";
                      $sql .= "product.price, product.color, product.p_description, ";
                      $sql .= "category.cat_name, type.type_name, product.picture from product ";
                      $sql .= "INNER JOIN category ON product.cat_id = category.cat_id ";
                      $sql .= "INNER JOIN type ON product.type_id = type.type_id ";
                      $sql .= "where pid like '%$search%' or ";
                      $sql .= "product.p_name like '%$search%' or ";
                      $sql .= "quantity like '%$search%' or ";
                      $sql .= "price like '%$search%' or ";
                      $sql .= "color like '%$search%' or ";
                      $sql .= "category.cat_name like '%$search%' or ";
                      $sql .= "type.type_name like '%$search%'";

                      $rs = $mysqli->query($sql);

                      if (mysqli_num_rows($rs) > 0) {
                        while ($row = mysqli_fetch_assoc($rs)) {
                        ?>
                          <tr>
                            <td><?php echo $row['pid'] ?></td>
                            <td><?php echo $row['p_name'] ?></td>
                            <td><?php echo $row['quantity'] ?></td>
                            <td><?php echo $row['price'] ?></td>
                            <td><?php echo $row['color'] ?></td>
                            <td><?php echo $row['p_description'] ?></td>
                            <td><?php echo $row['cat_name'] ?></td>
                            <td><?php echo $row['type_name'] ?></td>
                            <td>
                              <img src="images/thumb/<?php echo $row['picture'] ?>" alt="product image">
                            </td>
                            <td>
                              <a href="edit_product_2.php?pid=<?php echo $row['pid'] ?>" class="btn btn-sm btn-primary d-block mb-2"> Edit</a>
                              <a href="delete_product_2.php?pid=<?php echo $row['pid'] ?>" class="btn btn-sm btn-danger d-block"> Delete</a>
                            </td>
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
