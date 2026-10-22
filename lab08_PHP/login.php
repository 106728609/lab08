<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Login</title>
</head>
<?php
    include 'header.inc';
?>
<body>
    <form method="post" action="process.php">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br>

        <input type="hidden" name="token" value="P106728609">
        <input type="submit" value="Login">
    </form>
    <?php
        include 'footer.inc';
    ?>
</body>
</html>