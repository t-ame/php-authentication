<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auth App | Login</title>
</head>
<body>
    <?php
        include_once("lib/header.php");
    ?>
    <h1>Login Page</h1>

    <p><strong>Welcome, Please enter your details to log in.</strong></p>
    <p>All fields are required.</p>

    <form action="processlogin.php" method="POST">
    
    <label for="email">Email</label>
    <br>
        <input type="email" name="email" id="email" placeholder="Email" required>
        <br>
        <label for="password">Password</label>
        <br>
        <input type="password" name="password" id="password" placeholder="Password" required>
        <br>

        <button type="submit">Submit</button>

    </form>
</body>
</html>