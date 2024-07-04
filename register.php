<?php
include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="registerstyles.css">
    <title>Register</title>
</head>
<body>
    <div class="container">
        <div class="box form-box">
            <header class="sign-up">
                Sign up
            </header>
            <form action="" method="post">
                <div class="field input">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" required>
                </div>

                <div class="field input">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" required>
                </div>

                <div class="field input">
                    <label for="age">Age</label>
                    <input type="number" name="age" id="age" required>
                </div>
                
                <div class="field input">
                    <label for="bio">Bio</label>
                    <input type="text" name="bio" id="bio" required>
                </div>

                <div class="field input">
                    <label for="hobby">Hobbies</label>
                    <input type="text" name="hobby" id="hobby" required>
                </div>

                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" required>
                </div>

                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Register">
                </div>

                <div class="links">
                    Already a member? <a href="login.php">Sign In</a>
                </div>
            </form>
        </div>
    </div>

    <?php
    if (isset($_POST['submit'])) {
        $name = $_POST['username'];
        $email = $_POST['email'];
        $hobby = $_POST['hobby'];
        $bio = $_POST['bio'];
        $age = $_POST['age'];
        $password = $_POST['password'];

        $query = "INSERT INTO signup (username, email, age, password, bio, hobby) VALUES ('$name', '$email', '$age', '$password', '$bio', '$hobby')";

        // $query = "INSERT INTO signup (username, email, age, password,bio,hobby) VALUES ('$name', '$email', '$age', '$password')";
        $data = mysqli_query($conn, $query);

        if ($data) {
            echo "Data inserted";
        } else {
            echo "Data not inserted";
        }
    }
    ?>
</body>
</html> 
