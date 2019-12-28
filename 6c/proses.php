<?php 
include_once("config.php");

  if (isset($_POST['submitAdd'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $category = $_POST['category'];
    $cashier = $_POST['cashier'];

    $sql = "INSERT INTO product VALUES ('','$name','$price','$category','$cashier')";
    $resultAdd = mysqli_query($mysqli,$sql);

    if ($resultAdd) {
      header("Location: index.php");
    } else {
      header("Location: index.php");
    }
  }

  if (isset($_POST['submitEdit'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $category = $_POST['category'];
    $cashier = $_POST['cashier'];
    var_dump($id);
    var_dump($name);
    var_dump($price);
    var_dump($category);
    var_dump($cashier);

    $sql = "UPDATE product SET id='$id', name='$name', price='$price', id_category='$category', id_cashier='$cashier' WHERE id='$id'";
    $resultEdit = mysqli_query($mysqli,$sql);

    if ($resultEdit) {
      header("Location: index.php");
    } else {
      header("Location: index.php");
    }
  }

  
?>