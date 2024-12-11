<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname   = "studs_db";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $conn = new mysqli('localhost', 'root', '', 'studs_db');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];

    $sql = "INSERT INTO students (first_name, last_name, dob, email, mobile, gender, password)
            VALUES ('$first_name', '$last_name', '$dob', '$email', '$mobile', '$gender', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful. <a href='login.php'>Login here</a>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>

<html>
<head>
    <title>Register</title>
</head>
<body>
    <h2>Student Registration</h2>
    <form method="post" action="">
        <label>First Name:</label><input type="text" name="first_name" required><br>
        <label>Last Name:</label><input type="text" name="last_name" required><br>
        <label>Date of Birth:</label><input type="date" name="dob" required><br>
        <label>Email:</label><input type="email" name="email" required><br>
        <label>Mobile:</label><input type="text" name="mobile" required><br>
        <label>Gender:</label>
        <input type="radio" name="gender" value="Male" required>Male
        <input type="radio" name="gender" value="Female" required>Female<br>
        <label>Password:</label><input type="password" name="password" required><br>
        <button type="submit">Register</button>
    </form>
</body>
</html>

