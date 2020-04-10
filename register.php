<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auth App | Register</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>

    <?php
    include_once("lib/header.php");
    include_once("lib/dashredirect.php");
    ?>
    <h2>Registration Page</h2>
    <hr>

    <p><strong>Welcome, Please enter your details to register.</strong></p>
    <p style='color: red; font-weight: 100'>All fields are required.</p>

    <form action="processregister.php" method="POST">
        <p>
            <span class="error_message">
                <?php echo $_SESSION['errorMsg'] ?? "" ?>
            </span>
        </p>
        <input type="hidden" name="admin" id="admin" value="">
        <p>
            <label for="first_name">First Name</label>
            <br>
            <input type="text" name="first_name" id="first_name" placeholder="First Name" value="<?php echo $_SESSION['first_name'] ?? "" ?>">
            <span class="input_error"><?php echo $_SESSION['first_name_error'] ?? "" ?></span>
        </p>

        <p>
            <label for="last_name">Last Name</label>
            <br>
            <input type="text" name="last_name" id="last_name" placeholder="Last Name" value="<?php echo $_SESSION['last_name'] ?? "" ?>" required>
            <span class="input_error"><?php echo $_SESSION['last_name_error'] ?? "" ?></span>
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
            <label for="gender">Gender</label>
            <br>
            <select name="gender" id="gender" required>
                <option value="">-- Select Gender --</option>
                <option value="Female" <?php echo isset($_SESSION['gender']) && $_SESSION['gender'] == "Female" ? "selected" : "" ?>>Female</option>
                <option value="Male" <?php echo isset($_SESSION['gender']) && $_SESSION['gender'] == "Male" ? "selected" : "" ?>>Male</option>
            </select>
            <span class="input_error"><?php echo $_SESSION['gender_error'] ?? "" ?></span>
        </p>

        <hr style="width: 300px; float: left">
        <br>

        <p>
            <label for="designation">Designation</label>
            <br>
            <select name="designation" id="designation" required>
                <option value="">-- Select Designation --</option>
                <option value="STAFF" <?php echo isset($_SESSION['designation']) && $_SESSION['designation'] == "STAFF" ? "selected" : "" ?>>Staff</option>
                <option value="PATIENT" <?php echo isset($_SESSION['designation']) && $_SESSION['designation'] == "PATIENT" ? "selected" : "" ?>>Patient</option>
            </select>
            <span class="input_error"><?php echo $_SESSION['designation_error'] ?? "" ?></span>
        </p>

        <p>
            <label for="department">Department</label>
            <br>
            <select name="department" id="department" required>
                <option value="">-- Select Department --</option>
                <option value="Urology" <?php echo isset($_SESSION['department']) && $_SESSION['department'] == "Urology" ? "selected" : "" ?>>Urology</option>
                <option value="Pediatrics" <?php echo isset($_SESSION['department']) && $_SESSION['department'] == "ENT" ? "selected" : "" ?>>Pediatrics</option>
                <option value="X-Ray_Lab" <?php echo isset($_SESSION['department']) && $_SESSION['department'] == "X-Ray_Lab" ? "selected" : "" ?>>X-Ray Lab</option>
            </select>
            <span class="input_error"><?php echo $_SESSION['department_error'] ?? "" ?></span>
        </p>

        <p>
            <button type="submit">Register</button>
        </p>

    </form>
    <?php
    session_unset();
    ?>
</body>

</html>