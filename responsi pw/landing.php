<?php
include_once 'config.php';


if(isset($_GET['delete_id']))
{
 $sql_query="DELETE FROM inventory WHERE id=".$_GET['delete_id'];
 mysqli_query($conn,$sql_query);
 header("Location: $_SERVER[PHP_SELF]");
}
if(isset($_GET['changestatus_id']))
{
 $sql_query="UPDATE inventory SET `status`='".$_GET['status']."' WHERE id=".$_GET['changestatus_id'];
 mysqli_query($conn,$sql_query);
 header("Location: $_SERVER[PHP_SELF]");
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Inventory List</title>
<link rel="stylesheet" href="style.css" type="text/css" />
<script type="text/javascript">
function edt_id(id)
{
  window.location.href='edit_inventory.php?edit_id='+id;
}
function view_id(id)
{
  window.location.href='view_inventory.php?view_id='+id;
}
function delete_id(id)
{
 if(confirm('Sure to Delete ?'))
 {
  window.location.href='landing.php?delete_id='+id;
 }
}
function changestatus_id(id,status)
{
  window.location.href='landing.php?changestatus_id='+id+'&status='+status;
}
</script>
</head>
<body>
<center>

<div id="header">
 <div id="content">
    <label>Inventory List - Everything Office</label>
    </div>
</div>

<div id="body">
 <div id="content">
    <table align="center"class="table table-striped"> 
    <tr>
    <th colspan="5"><a href="add_inventory.php">Create New</a></th>
    </tr>
    <th>No.</th>
    <th>Item ID (Click to view)</th>
   
    <th colspan="3">Actions</th>
    </tr>
    <?php
 $sql_query="SELECT * FROM inventory";
 $result_set=mysqli_query($conn,$sql_query);
 $i=1;
 while($row=mysqli_fetch_row($result_set))
 {
  ?>
        <tr>
        <td align="center" ><?php echo $i; ?></td>
        <td align="center" > <a href="javascript:view_id('<?php echo $row[0]; ?>')"> <?php echo $row[1]; ?> </a> </td>
  <td align="center"><a href="javascript:edt_id('<?php echo $row[0]; ?>')">Edit</a></td>
        <td align="center"><a href="javascript:delete_id('<?php echo $row[0]; ?>')">Delete</a></td>
        </tr>
        <?php
       $i++;  
 }
 ?>
    </table>
    </div>
</div>

<span style="float:center; border: 2px solid white;
            outline-style: solid;
            outline-offset: 1px;
            outline-color: black;">
                    <a href="berhasil_login.php" class="btn">Home</a>
                    </span>

</center>
</body>
</html>