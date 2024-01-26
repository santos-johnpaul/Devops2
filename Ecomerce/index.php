<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<body>

<?php
session_start();
if(isset($_SESSION["userName"])) {
    header("Location: homepage.php");
    exit();
}
?>

<div class="login-container">
    <h2>Login</h2>
    <?php
    // Check if the alert session variable is set
    if(isset($_SESSION["alert"])) {
        echo '<div class="alert alert-danger" role="alert">' . $_SESSION["alert"] . '</div>';
        // Unset the alert session variable
        unset($_SESSION["alert"]);
    }
    ?>
    <form class="login-form" action="config/login.php" method="post">
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" id="username" name="userName" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="Password" required>
        </div>
        <div class="form-group">
            <button type="submit" name="login">Login</button>
        </div>
    </form>
</div>

</body>
</html>
