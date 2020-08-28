<?php
    session_start();
    include 'includes/config.inc.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400&display=swap" rel="stylesheet">

    <!-- CSS Files -->
    <link rel="stylesheet" href="css/styles.css">


    <title>College Guide</title>
</head>


<body>
    

        <!-- Nav Bar -->
        <div class="ui fixed menu">
            <a class="header item" href="index.php"><i class="large graduation cap icon"></i></a>
            <a class="item" href="./index.php#services">Services</a>
            <a class="item" href="./index.php#about">About</a>
            <a class="item" href="./index.php#contact">Contact</a>
            <a class="item" href="blog.php">Blog</a>
            <div class="ui right menu">
            <?php
                if (isset($_SESSION['userId'])) {
                    echo '<a class="item" href="profile.php">Hello, '.$_SESSION['userId'].'</a><a class="item" href="includes/logout.inc.php" name="logout-submit">Logout</a></li>';
                } else {
                    echo '<a class="item" href="portal.php">Student Portal</a>';
                }
            ?>
            </div>
        </div>