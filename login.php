
<?php
session_start();
$username1 ="Thuan";
$password1="12345";
$message ="";
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    # code...
    $username= $_POST["username"];
    $password= $_POST["password"];
    if ($username == $username1 && $password ==$password1) {
        $message =" <p style='color :green'> Dang Nhap Thanh Cong</p>";
        $_SESSION['username']= $username;
        setcookie('user',$username,time() +30 );
        header("Location: admin.php");

    }
    else{
        $message =" <p style='color :red'> Dang Nhap Khong Thanh Cong</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="login.php" method="post">
        <label for="">username</label><br>
        <input type="text" name="username"><br>

        <label for="">password</label><br>
        <input type="passwork" name="password">

        <input type="submit" value="Submit">
       
    </form>
    <?php echo $message ?>

</body>
</html>