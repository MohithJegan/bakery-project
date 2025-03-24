<?php
if(isset($_POST['addProduct'])){

  $productname = $_POST['productname'];
  $productdescription = $_POST['productdescription'];
  $productprice = $_POST['productprice'];
  $productimgurl = $_POST['productimgurl'];

  include('reusables/connection.php');
  if($productname && $productdescription && $productprice && $productimgurl){
    $query = "INSERT INTO products (`product_name`, `product_description`, `product_price`, `product_imgurl`)
    VALUES('$productname', '$productdescription', '$productprice', '$productimgurl')";
  
    $product = mysqli_query($connect, $query);
    if($product){
      echo ('Product added successfully.');
    }
    else{
      echo 'Unable to add the product, Error code: '. mysqli_error();
    }
  }
  else{
    echo "Error in dding the products";
  }
 
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LMS</title>

  <!-- Bootstrap CDN CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
  <?php include('reusables/navbar.php');
  
  ?>
  <div class="container">
    <div class="row">
      <div class="col">
        <h1 class="display-5">Add a Product</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
      <form method="POST" action="addProduct.php">
        <div class="mb-3">
          <label for="productname" class="form-label">Product Name</label>
          <input type="text" class="form-control" name="productname" id="productname" aria-describedby="productname">
        </div>

        <div class="mb-3">
          <label for="productdescription" class="form-label">Product Description</label>
          <input type="text" class="form-control" name="productdescription" id="productdescription" aria-describedby="productdescription">
        </div>

        <div class="mb-3">
          <label for="productprice" class="form-label">Product Price</label>
          <input type="number" class="form-control" name="productprice" id="productprice" aria-describedby="productprice">
        </div>

        <div class="mb-3">
          <label for="productimgurl" class="form-label">Product Image Url</label>
          <input type="text" class="form-control" name="productimgurl" id="productimgurl" aria-describedby="productimgurl">
        </div>
        
        <button type="submit" class="btn btn-primary" name="addProduct">Submit</button>
      </form>
      </div>
    </div>
  </div>
</body>
</html>