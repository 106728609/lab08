<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Process</title>
</head>

<body>
    <?php
        session_start();
        $username = $_POST['username'];
        $password = $_POST['password'];

        if($username == 'Pang Hui Xin' && $password == '106728609') {
            $_SESSION['user'] = $username;
            header('Location: welcome.php');
        } else {
            echo "Invalid login. <a href='login.php'>Try again</a>";
        }
    ?>
</body>
</html>
        