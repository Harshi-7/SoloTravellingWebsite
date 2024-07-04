<?php
include("connection.php");
session_start();

$query = "SELECT username, email, age, hobby, bio FROM signup";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="profilestyle.css">
    <title>User Profiles</title>
</head>
<body>
    <div class="container">
        <header>
            <h1>Profiles</h1>
            <a href="logout.php" class="logout-btn">Logout</a>
        </header>
        <div class="profiles-grid">
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<div class='profile-card'>";
                echo "<h2>" . $row['username'] . "</h2>";
                echo "<p>Email: " . $row['email'] . "</p>";
                echo "<p>Age: " . $row['age'] . "</p>";
                echo "<p>Hobby: " . $row['hobby'] . "</p>";
                echo "<p>Bio: " . $row['bio'] . "</p>";
                echo "</div>";
            }
            ?>
        </div>
    </div>


    <script src="script.js"></script>
</body>
</html>