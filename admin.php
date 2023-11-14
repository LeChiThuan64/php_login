<?php
session_start();
if (!isset($_SESSION['username'])) {
    
    echo"Het Thoi Gian Dang Nhap";
    exit;
}
echo "Chao Mung Ni , " . $_SESSION['username']. "! <br>"
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thuannnnnn</title>
    
</head>
<body>

    <a href="logout.php"> Dang Xuat</a>
</body>
</html>