<?php
session_start();
include_once 'includes/functions.inc.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/kartikstyle.css">
</head>

<body>


    <nav class="navbar">
            <ul>
                <li><a href="dashboard.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="renamethis.php">Something</a></li>
                <?php
                if (isset($_SESSION["useruid"])) {
                    echo "<a href='profile.php'>Profile</a>";
                    echo "";
                    echo "<li><a href='includes/logout.inc.php'>LogOut</a></li>";
                } else {
                    echo "<li><a href='signup.php'>Sign Up</a></li>";
                    echo "<li><a href='login.php'>Login</a></li>";
                }
                ?>
            </ul>
    </nav>
    <div>