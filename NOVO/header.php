<?php
    $userId = "";
    if(isset($_SESSION["id"])){
        $userId = $_SESSION["id"];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <nav id="navigation-bar" class="navbar navbar-expand-lg">
        <!-- Brand/logo -->
        <a class="navbar-brand" href="index.php">
            <img id="home" src="./images/home.png" alt="home">
        </a>
        <!-- Links -->
        <ul class="navbar-nav">
            <?php if(empty($userId)) { 
            ?>
                <li class="nav-item">
                    <a class="nav-link" href="register.php">Register</a>
                </li>
                <li class="nav-item">                    
                    <a class="nav-link" href="login.php">Login</a>
                </li>
            <?php } else {
            ?>
                <li class="nav-item">
                    <a class="nav-link" href="profile.php">Profile</a>
                </li>
                <li class="nav-item">                    
                    <a class="nav-link" href="connection.php">Connections</a>
                </li>
                <li class="nav-item">                    
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
            <?php }
            ?>
        </ul>
    </nav>
</body>
</html>