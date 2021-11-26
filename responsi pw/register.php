<?php 
 
include 'config.php';
 
error_reporting(0);
 
session_start();
 
if (isset($_SESSION['username'])) {
    header("Location: index.php");
}
 
if (isset($_POST['submit'])) {
    $full_name = $_POST['full_name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone_num = $_POST['phone_num'];
    $password = ($_POST['password']);
    $cpassword = ($_POST['cpassword']);
 
    if ($password == $cpassword) {
        $sql = "SELECT * FROM staff WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO users (full_name, username, email, phone_num, 'password')
                    VALUES ('$full_name', $username', '$email', '$phone_num', '$password')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<script>alert('Registration Succesful!')</script>";
                $full_name = "";
                $username = "";
                $email = "";
                $phone_num = "";
                $_POST['password'] = "";
                $_POST['cpassword'] = "";
            } else {
                echo "<script>alert('Error!')</script>";
            }
        } else {
            echo "<script>alert('Sorry, email already registered!.')</script>";
        }
         
    } else {
        echo "<script>alert('Incorrect Password')</script>";
    }
}
 
?>
 
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" type="text/css" href="style.css">
 
    <title>Register</title>
</head>
<body>
    <div class="container">
        <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
            <div class="input-group">
                <input type="text" placeholder="Full Name" name="full_name" value="<?php echo $full_name; ?>" required>
            </div>
            <div class="input-group">
                <input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
            </div>
            <div class="input-group">
                <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
            </div>
            <div class="input-group">
                <input type="text" placeholder="Phone Number" name="phone_num" value="<?php echo $phone_num; ?>" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Register</button>
            </div>
            <p class="login-register-text">Already signed up? <a href="index.php">Login </a></p>
        </form>
    </div>
</body>
</html>