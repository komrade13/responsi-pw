<?php
include_once 'config.php';

if(isset($_POST['btn-save']))
{
 // variables for input data
     $item_id = $_POST['item_id'];
      $item_name = $_POST['item_name'];
      $amount = $_POST['amount'];
      $unit = $_POST['unit'];
      $arrival_date = $_POST['arrival_date'];
      $category = $_POST['category'];
      $item_status = $_POST['item_status'];
      $price = $_POST['price'];
    // variables for input data

 // sql query for inserting data into database
 
$sql_query="INSERT INTO inventory (`item_id`,`item_name`,`amount`,`unit`,`arrival_date`,`category`,`item_status`,`price`) VALUES('".$item_id."','".$item_name."','".$amount."','".$unit."','".$arrival_date."','".$category."','".$item_status."','".$price."')";
 // sql query for inserting data into database
 
 // sql query execution function
 if(mysqli_query($conn,$sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('inventory added Successfully ');
  window.location.href='landing.php';
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert('error occured while inserting your data');
  </script>
  <?php
 }
 // sql query execution function
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add Inventory</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>

<div id="header">
 <div id="content">
        <label>List of Inventory - Everything Office</a></label>
    </div>
</div>
<div id="body">
 <div id="content">
    <form method="post" enctype="multipart/form-data" >
    <table align="center">
    <tr>
    <td align="center"><a href="landing.php">Cancel</a></td>
    </tr>



      <tr>
    <td>
    <input type="text" class="form-control" id="item_id" name="item_id" required placeholder="Item ID">
    </td>
    </tr>
    <tr>
    <td>
    <input type="text" class="form-control" id="item_name" name="item_name" required placeholder="Item Name">
    </td>
    </tr>
    <tr>
    <td>
    <input type="number" class="form-control" id="amount" name="amount" required placeholder="Amount">
    </td>
    </tr>
    <tr>
    <td>
    <input type="text" class="form-control" id="unit" name="unit" required placeholder="Unit">
    </td>
    </tr>
    <tr>
    <td>
    <input type="text" class="form-control" id="arrival_date" name="arrival_date" required placeholder="Arrival Date">
    </td>
    </tr>
    <tr>
    <td>
    <input type="text" class="form-control" id="category" name="category" required placeholder="Category">
    </td>
    </tr>
    <tr>
    <td>
    <input type="text" class="form-control" id="item_status" name="item_status" required placeholder="Item Status">
    </td>
    </tr>
    <tr>
    <td>
    <input type="number" class="form-control" id="price" name="price" required placeholder="Price">
    </td>
    </tr>
  



    <tr>
    <td><button type="submit" name="btn-save"><strong>Save</strong></button></td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>
</html>