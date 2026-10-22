<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Welcome</title>
</head>
<?php
    include 'header.inc';
?>
<body>
<?php
session_start();
if(isset($_SESSION['user'])){
    echo "Welcome, " .$_SESSION['user'];
} else {
    header('Location: login.php');
}
?>
<?php
    include 'footer.inc';
?>
</body>
</html>