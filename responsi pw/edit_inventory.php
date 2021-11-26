<?php
include_once 'config.php';

if(isset($_GET['edit_id']))
{
 $sql_query="SELECT * FROM inventory WHERE id=".$_GET['edit_id'];
 $result_set=mysqli_query($conn,$sql_query);
 $fetched_row=mysqli_fetch_array($result_set,MYSQLI_ASSOC);
}
if(isset($_POST['btn-update']))
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

 // sql query for update data into database
  $sql_query="UPDATE inventory SET `item_id`='$item_id',`item_name`='$item_name',`amount`='$amount',`unit`='$unit',`arrival_date`='$arrival_date',`category`='$category',`item_status`='$item_status',`price`='$price' WHERE id=".$_GET['edit_id'];
 
 // sql query execution function
 if(mysqli_query($conn,$sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('inventory updated successfully');
  window.location.href='landing.php';
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert('error occured while updating data');
  </script>
  <?php
 }
 // sql query execution function
}
if(isset($_POST['btn-cancel']))
{
 header("Location: landing.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit Item</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>

<div id="header">
 <div id="content">
        <label>Edit Item - Everything Office</a></label>
    </div>
</div>

<div id="body">
 <div id="content">
    <form method="post" enctype="multipart/form-data">
    <table align="center">
    <tr>
    <td>
    <input type="text" value="<?php echo $fetched_row['item_id'] ?>" class="form-control" id="item_id" name="item_id">
</td>
    </tr>
  <tr>
    <td>
    <input type="text" value="<?php echo $fetched_row['item_name'] ?>" class="form-control" id="item_name" name="item_name">
</td>
    </tr>
  <tr>
    <td>
    <input type="number" value="<?php echo $fetched_row['amount'] ?>" class="form-control" id="amount" name="amount">
</td>
    </tr>
  <tr>
    <td>
    <input type="text" value="<?php echo $fetched_row['unit'] ?>" class="form-control" id="unit" name="unit">
</td>
    </tr>
  <tr>
    <td>
    <input type="text" value="<?php echo $fetched_row['arrival_date'] ?>" class="form-control" id="arrival_date" name="arrival_date">
</td>
    </tr>
  <tr>
    <td>
    <input type="text" value="<?php echo $fetched_row['category'] ?>" class="form-control" id="category" name="category">
</td>
    </tr>
  <tr>
    <td>
    <input type="text" value="<?php echo $fetched_row['item_status'] ?>" class="form-control" id="item_status" name="item_status">
</td>
    </tr>
  <tr>
    <td>
    <input type="number" value="<?php echo $fetched_row['price'] ?>" class="form-control" id="price" name="price">
</td>
    </tr>
      <tr>
    <td>
    <button type="submit" name="btn-update"><strong>UPDATE</strong></button>
    <button type="submit" name="btn-cancel"><strong>Cancel</strong></button>
    </td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>
</html>