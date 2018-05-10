<!DOCTYPE html>
<html>
  <head>
      <meta charset="UTF-8">
      <title>View Products</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="css/fruit.css">
     <style>
        tr:nth-child(even){
          background-color: #f2f2f2
        }

        th {
          background-color: #3575D3;
          color: white;
        }

        h2{
          text-align: center;
        }

        .btn-info {
          margin-bottom: 3px;
        }
    </style>
 </head>
 <body>
  <div class="topnav">
    <a href="index.php">Home</a>
    <a href="addProduct.php">Add Product</a>
    <a class="active" href="viewProducts.php">View Products</a>
    <div class="search-container">
      <form action="" method="POST">
        <input type="text" name="valueToSearch" placeholder="Search by product name..">
        <input class="btn btn-info" type="submit" name="search" style="margin-right: 10px;">
      </form>
    </div>
  </div>
  <h1>International Fruit Database</h1>
  <h2>View Products</h2>
    <table id="products">
      <tr>
          <th>Order_ID</th>
          <th>Product Name</th>
          <th>Product Origin</th>
          <th>Product Price</th>
      </tr>
      <?php
        $host = 'localhost';
        $username	= '';
        $password	= '';
        $dbname =  '';
        $message = "";
        $product = trim($_REQUEST['valueToSearch']);

        $conn = mysqli_connect($host, $username, $password, $dbname);

        if(empty($conn)) {
          die("Connection Failed: ".mysqli_connect_error());
        }

    		$query = "";
    		if (empty($product)) {
    			$query = "select * from tblFruits;";
    		}
    		else {
    			$query = "select * from tblFruits where productName like '%$product%';";
    		}

        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>" . $row['order_id'] . "</td>";
            echo "<td>" . $row['productName'] . "</td>";
            echo "<td>" . $row['productOrigin'] . "</td>";
            echo "<td>" . $row['productPrice'] . "</td>";
            echo "</tr>";
          }
        } else {
            echo "Sorry, nothing found matches from the database";
        }
      ?>
    </table>
    </body>
</html>
