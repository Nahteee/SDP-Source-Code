<?php
include("admin_session.php");
include("../conn.php");
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--So that the browser will render the width of the page at the width of its own screen-->
  <link rel="stylesheet" href="../CSS/reset.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" href="../CSS/style.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" href="../CSS/admin_style.css?v=<?php echo time(); ?>">
  <title></title>
</head>

<body>
  <header>
    <a href="admin_products.php" class="header-brand"><img src="../images/Brand_Logo.png" alt=""></a>
    <nav>
      <ul>
        <li> <a href="admin_products.php" id="selected">Products</a> </li>
        <li> <a href="admin_orders.php">Orders</a> </li>
        <li> <a href="admin_view_customers.php">Customers</a> </li>
      </ul>
      <a href="admin_logout.php" class="header-cases">Logout</a>
    </nav>
  </header>
  <main>
    <section class="main-wrapper">
      <div class="box-header">
        <h1>Products List</h1>
        <a href="admin_add_products.php" class="add">Add New Product ➕</a>
      </div>
      <table>
        <tr>
          <th>Product ID</th>
          <th>Image</th>
          <th>Product Name</th>
          <th>Price (RM)</th>
          <th>Quantity</th>
          <th>Category</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
        <?php
          $result=mysqli_query($con,"SELECT * FROM product");
          while($row=mysqli_fetch_array($result)){
            $product_image = "default1.jpg";
        		if ($row['product_image']!=""){
        			$product_image = $row['product_image'];
        		}
        		echo "<tr>"; // alternative way is : echo ‘<trbgcolor="#99FF66">’;
        		echo "<td>";
        		echo $row['id'];
        		echo "</td>";
        		echo "<td>";
        		echo '<img style="vertical-align: middle; margin-left: 10px; padding-right: 0px" src="'.$product_image.'" width="60px">';
        		echo "</td>";
        		echo "<td>";
        		echo $row['product_name'];
        		echo "</td>";
        		echo "<td>";
        		echo number_format($row['product_price'],2);
        		echo "</td>";
        		echo "<td>";
        		echo $row['product_qty'];
        		echo "</td>";
        		echo "<td>";
        		echo $row['Category'];
        		echo "</td>";
        		echo "<td><a href=\"admin_edit_product.php?id="; //edit.php will be created in Lab 8
        		echo $row['id'];
        		echo "\">Edit</a></td>";
        		echo "<td><a href=\"admin_delete_products.php?id="; //hyperlink to delete.php page with ‘id’ parameter
        		echo $row['id'];
        		echo "\" onClick=\"return confirm('Delete "; //JavaScript to confirm the deletion of the record
        		echo $row['product_name'];
        		echo " details?');\">Delete</a></td></tr>";
        		}
        		mysqli_close($con);//to close the database connection
        ?>
      </table>
    </section>
  </main>
  <footer>
      <div class="footer-content">
        <p class="company-name">© 2022 Company, Inc</p>
        <a href="admin_products.php" class="header-brand"><img src="../images/Brand_Logo.png" alt=""></a>
        <nav>
          <ul>
            <li> <a href="admin_products.php">Products</a> </li>
            <li> <a href="admin_orders.php">Orders</a> </li>
            <li> <a href="admin_view_customers.php">Customers</a> </li>
          </ul>
        </nav>
      </div>
  </footer>
</body>

</html>
