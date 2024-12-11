<?php
if (!isset($_COOKIE['user'])) {
    header("Location: log.php");
    exit();
}

echo "<h2>Welcome, " . $_COOKIE['user'] . "</h2>";

$conn = new mysqli('localhost', 'root', '', 'studs_db');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM students";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>DOB</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Gender</th>
            </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['first_name'] . "</td>
                <td>" . $row['last_name'] . "</td>
                <td>" . $row['dob'] . "</td>
                <td>" . $row['email'] . "</td>
                <td>" . $row['mobile'] . "</td>
                <td>" . $row['gender'] . "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No students found.";
}
$conn->close();
?>
