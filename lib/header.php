<?php session_start(); ?>

<p>
    <a href="index.php">Home</a>
    <?php
    if (!isset($_SESSION['Loggedin'])) {
    ?>
        <span class="float_right"> <a href="login.php">Login/Register</a> </span>
    <?php
    } else {
    ?>
        | <a href="<?php echo $_SESSION['role'] != "STAFF" ? "medteam.php" : ($_SESSION['role'] != "PATIENT" ? "patient.php" : "admin.php") ?>">Dashboard</a>
        <span class="float_right"> Welcome, <strong><?php echo ' ' . ($_SESSION['fullName'] ?? "Beloved user") . ' ' ?></strong> |
            <a href="logout.php">Logout</a> </span>
    <?php
    }
    ?>
</p>