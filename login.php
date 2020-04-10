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
    if (isset($_SESSION['Loggedin']) && !empty($_SESSION['Loggedin'])) {
        header('Location: dashboard.php');
    }
    ?>
    <h1>Login Page</h1>

    <p>
        <span class="success_message">
            <?php echo $_SESSION['successMsg'] ?? "" ?>
        </span>
    </p>

    <p><strong>Welcome, Please enter your details to log in.</strong></p>
    <p>All fields are required.</p>

    <form action="processlogin.php" method="POST">

        <p>
            <span class="error_message">
                <?php echo $_SESSION['errorMsg'] ?? "" ?>
            </span>
        </p>

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

    <p><a href="register.php">Register</a> | <a href="forgot.php">Forgot password</a></p>

    <?php session_unset(); ?>
</body>

</html>