<?php 
 
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}
 
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
</head>

<body>
<div style="color:white;text-align:center;background-color:#6200ff ;padding: 1px;font-size: 40px">
<p> List of Inventory<br>Everything Office</p>
</div>

<div style=" background-color : lightgray; padding : 5px; color : white;">
                <ul>
                    <a href = "berhasil_login.php">Home </a> &nbsp; &nbsp;
                    <a href = "landing.php">Inventory List </a> &nbsp; &nbsp;
                    <a href = "read2.php">List per Category</a>
                    <span style="float:right; background-color:white; border: 2px solid white;
            outline-style: solid;
            outline-offset: 1px;
            outline-color: black;">
                    <a href="logout.php" class="btn">Logout</a>
                    </span>
                </ul> 
</div>
    <div class="container-logout" style="text-align: center; padding :20%">
        <form action="" method="POST" class="login-email">
        <?php echo "<h1>Welcome, " . $_SESSION['username'] ."!". "</h1>"; ?>
        </form>
    </div>

    <div style="color:white;text-align:center;background-color:#6200ff;padding: 1px;font-size: 10px">
<p>Inventory Web 2021</p>
</div>

</body>
</html>