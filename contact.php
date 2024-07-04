<?php 
include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contactstyle.css">
    <title>Contact Us</title>
</head>
<body>
    <div class="container">
        <div class="box form-box">
            <header class="header login">
                Contact Us
            </header>
            <form method="post" name="google-sheet">

                <div class="field input">
                    <input type="text" name="username" id="username" placeholder="Name" required>
                </div>

                <div class="field input">
                    <input type="email" name="email" id="email" placeholder="Email" required>
                </div>

                <div class="field input">
                    <input type="number" name="age" id="age" placeholder="Age" required>
                </div>

                <div class="field input">
                    <textarea name="message" rows="7" placeholder="Your Message" required></textarea>
                </div>

                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Submit">
                </div>

            </form>
        </div>
    </div>
    <?php
    if (isset($_POST['submit'])) {
        $name = mysqli_real_escape_string($conn, $_POST['username']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $age = mysqli_real_escape_string($conn, $_POST['age']);
        $message = mysqli_real_escape_string($conn, $_POST['message']);

        $query = "INSERT INTO contact (username, email, age, message) VALUES ('$name', '$email', '$age', '$message')";
        $data = mysqli_query($conn, $query);

        if ($data) {
            echo "<p>Data inserted successfully</p>";
        } else {
            echo "<p>Data insertion failed</p>";
        }
    }
    ?>
</body>
</html>

