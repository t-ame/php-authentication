<?php
session_start();

print_r($_SESSION);
?>

<p>
    <a href="index.php">Home</a> |
    <?php
    if (!isset($_SESSION['Loggedin'])) {
    ?>
        <a href="login.php">Login/Register</a>
    <?php
    } else {
    ?>
        <strong>Welcome, <?php ' ' . ($_SESSION['fullName'] ?? "Beloved user") . ' ' ?></strong> |
        <a href="logout.php">Logout</a>
    <?php
    }
    ?>
</p>