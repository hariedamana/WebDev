<?php
session_start();
if(!isset($_SESSION['user']))
{
    	header('Location: login.php');
    	exit;
}

$user = $_SESSION['user'];
?>

<h2>Welcome, <?php echo $user['first_name']; ?>!</h2>
<p><b>Name:</b> <?php echo $user['first_name'] . " " . $user['last_name']; ?></p>
<p><b>Date of Birth:</b> <?php echo $user['dob']; ?></p>
<p><b>Email:</b> <?php echo $user['email']; ?></p>
<p><b>Mobile:</b> <?php echo $user['mobile']; ?></p>
<p><b>Gender:</b> <?php echo $user['gender']; ?></p>

<a href="logout.php">Logout</a>

