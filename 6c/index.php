<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT product.id as id, cashier.name as name, cashier.id as id_kasir, product.name as name_product, category.name as name_category, category.id as id_category, product.price FROM product INNER JOIN cashier ON product.id_cashier = cashier.id INNER JOIN category ON product.id_category = category.id ");
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>6 A</title>
  </head>
  <body>
    
    <nav class="section-nav navbar navbar-expand-lg shadow navbar-light ">
      <img src="p.png" alt="" width="100" height="50">
      <a href="#" class="navbar-brand ml-4"><span style="color: rgb(233, 96, 165); font-weight:600;">Arkademy</span> <span style="font-weight: bold;">COFFEE SHOP</span></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navb" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navb">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link mr-4 rounded py-2 px-5 text-white shadow" data-toggle="modal" data-target="#exampleModal" href="#" style="background-color: rgb(233, 96, 165);">ADD</a>
          </li>
      </div>
    </nav>

  <div class="container">
    <section class="section-table mt-5 d-flex justify-content-center">
      <table class="table table-borderless table-responsive shadow text-center" style="align-content: center; width: inherit; border-radius: 0.7em;">
        <thead class="thead-light">
          <tr>
            <th>No</th>
            <th>Cashier</th>
            <th>Product</th>
            <th>Category</th>
            <th>Price</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
        
        <?php 
        $no = 1;
          while ($data = mysqli_fetch_array($result)) {
            $kasir = $data['name'];
            ?>
            <tr>
            <td scope="row"><?= $no++ ?></td>
            <td><?= $data['name'] ?></td>
            <td><?= $data['name_product'] ?></td>
            <td><?= $data['name_category'] ?></td>
            <td><?= $data['price'] ?></td>
            <td>
              <a class="text-success" href="#" data-toggle="modal" data-target="#modaledit<?=$data['id']?>">Edit</a class="text-success"> |
              <a class="text-danger" href="delete.php?id=<?=$data['id']?>">Delete</a class="text-danger">
            </td>
          </tr>

          <?php 
            $resultCategory = mysqli_query($mysqli,"SELECT * FROM category");
            $resultCashier = mysqli_query($mysqli,"SELECT * FROM Cashier");
          ?>
          <!-- Modal Edit-->
          <div class="modal fade" id="modaledit<?=$data['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form action="proses.php" method="post">
                  <input type="hidden" name="id" value="<?=$data['id']?>">
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name"name value="<?=$data['name_product']?>">
                  </div>
                  <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" class="form-control" name="price" id="name" value="<?=$data['price']?>">
                  </div>
                  <div class="form-group">
                    <label for="category">Category</label>
                    <select class="form-control" name="category" id="category">
                      <option value="<?=$data['id_category']?>"><?=$data['name_category']?></option>
                    <?php  while ($datacat = mysqli_fetch_array($resultCategory)) { ?>
                      <option value="<?=$datacat['id']?>"><?=$datacat['name']?></option>
                    <?php } ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="cashier">Cashier</label>
                    <select class="form-control" name="cashier" id="cashier">
                      <option value="<?=$data['id_kasir']?>"><?=$data['name']?></option>
                      <?php while ($datacas = mysqli_fetch_array($resultCashier)) { ?>
                      <option value="<?=$datacas['id']?>"><?= $datacas['name'] ?></option>
                      <?php } ?>     
                    </select>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" name="submitEdit" class="btn btn-primary">Save changes</button>
                </div>
                  </form>
              </div>
            </div>
          </div>
            <?php
          } 
        ?>
        </tbody>
      </table>
    </section>
  </div>


  <?php 
  $resultCategory = mysqli_query($mysqli,"SELECT * FROM category");
  $resultCashier = mysqli_query($mysqli,"SELECT * FROM Cashier");
?>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="proses.php" method="post">
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" name="name" id="name"name>
        </div>
        <div class="form-group">
          <label for="price">Price</label>
          <input type="number" class="form-control" name="price" id="name"price>
        </div>
        <div class="form-group">
          <label for="category">Category</label>
          <select class="form-control" name="category" id="category">
            <option>-- Category --</option>
          <?php  while ($datacat = mysqli_fetch_array($resultCategory)) { ?>
            <option value="<?=$datacat['id']?>"><?=$datacat['name']?></option>
          <?php } ?>
          </select>
        </div>
        <div class="form-group">
          <label for="cashier">Cashier</label>
          <select class="form-control" name="cashier" id="cashier">
            <option>-- Cashier --</option>
            <?php while ($datacas = mysqli_fetch_array($resultCashier)) { ?>
            <option value="<?=$datacas['id']?>"><?= $datacas['name'] ?></option>
            <?php } ?>     
          </select>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="submitAdd" class="btn btn-primary">Save changes</button>
      </div>
        </form>
    </div>
  </div>
</div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>