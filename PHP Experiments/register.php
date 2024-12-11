<?php
session_start();

$hostname = "localhost";
$username = "root";
$password = "";
$dbname   = "students_app";

$conn = mysqli_connect($hostname, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $first_name = $_POST['first_name'];
    $last_name  = $_POST['last_name'];
    $dob        = $_POST['dob'];
    $email      = $_POST['email'];
    $mobile     = $_POST['mobile'];
    $gender     = $_POST['gender'];
    $password   = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO students (first_name, last_name, dob, email, mobile, gender, password) 
            VALUES ('$first_name', '$last_name', '$dob', '$email', '$mobile', '$gender', '$password')";

    if (mysqli_query($conn, $sql)) {
        echo "Registration successful. <a href='login.php'>Login here</a>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<form method="POST">
    <label>First Name: <input type="text" name="first_name" required></label><br>
    <label>Last Name: <input type="text" name="last_name" required></label><br>
    <label>Date of Birth: <input type="date" name="dob" required></label><br>
    <label>Email: <input type="email" name="email" required></label><br>
    <label>Mobile: <input type="text" name="mobile" required></label><br>
    <label>Gender: 
        <input type="radio" name="gender" value="Male" required>Male
        <input type="radio" name="gender" value="Female" required>Female
    </label><br>
    <label>Password: <input type="password" name="password" required></label><br>
    <button type="submit">Register</button>
</form>

