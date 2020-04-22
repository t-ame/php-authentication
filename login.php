<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auth App | Login</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>

    <?php
    include_once("lib/header.php");
    require_once("functions/alert.php");
    include_once("lib/dashredirect.php");
    ?>
    <h3>Login Page</h3>

    <p>
        <span class="message">
            <?php error("errorMsg");
            success("successMsg");
            warning("warnMsg"); ?>
        </span>
    </p>

    <p><strong>Welcome, Please enter your details to log in.</strong></p>

    <form action="processlogin.php" method="POST">

        <p>
            <label for="email">Email</label>
            <br>
            <input type="email" name="email" id="email" placeholder="Email" value="<?php echo $_SESSION['email'] ?? "" ?>" required>
            <span class="input_error"><?php echo $_SESSION['email_error'] ?? "" ?></span>
        </p>

        <p>
            <label for="password">Password</label>
            <br>
            <input type="password" name="password" id="password" placeholder="Password" required>
            <span class="input_error"><?php echo $_SESSION['password_error'] ?? "" ?></span>
        </p>


        <p>
            <button type="submit">Login</button>
        </p>

    </form>

    <p><a href="register.php">Register</a> </p>
    | <a href="forgot.php">Forgot password</a>
</body>

</html>