<!DOCTYPE html>
<html>
  <head>
      <meta charset="UTF-8">
      <title>View Products</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="css/fruit.css">
  </head>
  <body>
  <div class="topnav">
    <a href="index.php">Home</a>
    <a class="active" href="addProduct.php">Add Product</a>
    <a href="viewProducts.php">View Products</a>
    <div class="search-container"></div>
  </div>
  <h1>International Fruit Database</h1>
  <h2>Add Product</h2>

  <form action="addProduct1.php" method="post">
    <table>
      <tr>
        <td>Order_ID</td>
        <td>
          <input type="text" name="order_id" placeholder="20344202">
        </td>
      </tr>
      <tr>
        <td>Product Name:</td>
        <td>
            <input type="text" name="productName" placeholder="Tropical mango">
        </td>
      </tr>
      <tr>
        <td>Product Origin:</td>
        <td>
          <input type="text" name="productOrigin" placeholder="Country name">
        </td>
      </tr>
      <tr>
        <td>Product Price:</td>
        <td>
          <input type="text" name="productPrice" placeholder="Price for one product">
        </td>
      </tr>
      <tr>
        <td colspan="3">
          <input class="btn btn-primary" type="submit" value="Add Product">
        </td>
      </tr>
    </table>
  </form>
    <?php
      if (isset($_REQUEST['msg'])) {
        if($_REQUEST['msg'] == "Product-Added") {
          echo "<p> Product Added </p>";
        }
        elseif ($_REQUEST['msg'] == "Product-Not-Added"){
          echo "<p> Product Not Added </p>";
        }
      }
    ?>
    </body>
</html>
