<?php
include_once 'config.php';

if(isset($_GET['view_id']))
{
 $sql_query="SELECT * FROM inventory WHERE id=".$_GET['view_id'];
 $result_set=mysqli_query($conn,$sql_query);
 $fetched_row=mysqli_fetch_array($result_set,MYSQLI_ASSOC);
}



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>View Item</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>

<div id="header">
 <div id="content">
        <label>Item View - Everything Office</a></label>
    </div>
</div>

 <table align="center">
   <tr>
   <th colspan="5">item_id: <?php echo $fetched_row['item_id'] ?></th>
</tr>
 <tr>
   <th colspan="5">item_name: <?php echo $fetched_row['item_name'] ?></th>
</tr>
 <tr>
   <th colspan="5">amount: <?php echo $fetched_row['amount'] ?></th>
</tr>
 <tr>
   <th colspan="5">unit: <?php echo $fetched_row['unit'] ?></th>
</tr>
 <tr>
   <th colspan="5">arrival_date: <?php echo $fetched_row['arrival_date'] ?></th>
</tr>
 <tr>
   <th colspan="5">category: <?php echo $fetched_row['category'] ?></th>
</tr>
 <tr>
   <th colspan="5">item_status: <?php echo $fetched_row['item_status'] ?></th>
</tr>
 <tr>
   <th colspan="5">price: <?php echo $fetched_row['price'] ?></th>
</tr>
 </table>

 <span style="float:center; border: 2px solid white;
            outline-style: solid;
            outline-offset: 1px;
            outline-color: black;">
                    <a href="landing.php" class="btn">Return</a>
                    </span>

</center>
</body>
</html>