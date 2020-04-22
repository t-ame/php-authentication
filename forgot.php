<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auth App | Forgot Password</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>

    <?php
    include_once("lib/header.php");
    require_once("functions/alert.php");
    ?>
    <h3>Forgot Password</h3>
    <p>
        <span class="message">
            <?php error("errorMsg");
            success("successMsg");
            warning("warnMsg"); ?>
        </span>
    </p>

    <form action="processreset.php" method="POST">
        <p>
            <label for="email">Email</label>
            <br>
            <input type="email" name="email" id="email" placeholder="Email" value="<?php echo $_SESSION['email'] ?? "" ?>" required>
            <span class="input_error"><?php echo $_SESSION['email_error'] ?? "" ?></span>
        </p>

        <p>
            <button type="submit">Send Reset Link</button>
        </p>

    </form>

    <?php
    session_unset();
    ?>
</body>

</html>