<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auth App | Dashboard</title>
</head>

<body>

    <?php
    include_once("lib/header.php");

    echo "DASHBOARD";
    die();

    if (!isset($_SESSION['Loggedin'])) {
        header('Location: login.php');
    }
    ?>
    <p>Logged in user: <?php echo $_SESSION['Loggedin'] ?></p>

</body>

</html>