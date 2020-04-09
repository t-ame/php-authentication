<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auth App | Register</title>
</head>

<body>

    <?php include_once("lib/header.php"); ?>
    <h1>Registration Page</h1>
    <hr>

    <p><strong>Welcome, Please enter your details to register.</strong></p>
    <p>All fields are required.</p>

    <form action="processregister.php" method="POST">
        <label for="first_name">First Name</label>
        <br>
        <input type="text" name="first_name" id="first_name" placeholder="First Name" required>
        <br>
        <label for="last_name">Last Name</label>
        <br>
        <input type="text" name="last_name" id="last_name" placeholder="Last Name" required>
        <br>
        <label for="email">Email</label>
        <br>
        <input type="email" name="email" id="email" placeholder="Email" required>
        <br>
        <label for="password">Password</label>
        <br>
        <input type="password" name="password" id="password" placeholder="Password" required>
        <br>
        <label for="gender">Gender</label>
        <br>
        <select name="gender" id="gender" required>
            <option value="">-- Select Gender --</option>
            <option value="female">Female</option>
            <option value="male">Male</option>
        </select>
        <br>
        <hr style="width: 300px; float: left">
        <br>
        <label for="designation">Designation</label>
        <br>
        <select name="designation" id="designation" required>
            <option value="">-- Select Designation --</option>
            <option value="medical_team">Medical Team (MT)</option>
            <option value="patient">Patient</option>
        </select>
        <br>
        <label for="department">Department</label>
        <br>
        <select name="department" id="department" required>
            <option value="">-- Select Department --</option>
            <option value="urology">Urology</option>
            <option value="ent">Ear, Nose and Throat</option>
        </select>
        <br>
        <br>

        <button type="submit">Submit</button>

    </form>
</body>

</html>