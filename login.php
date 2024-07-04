<?php
include("connection.php");

session_start();

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("SELECT * FROM signup WHERE email = ? AND password = ?");
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $_SESSION['email'] = $email;
        // Redirect to profiles.php
        header("Location: profiles.php");
        exit(); // Ensure no further code is executed
    } else {
        echo "Invalid email or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="loginstyles.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="box form-box">
            <header class="sign-in">
                Login
            </header>
            <form action="login.php" method="post">
                <div class="field input">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" required>
                </div>

                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" required>
                </div>

                <div class="field">
                    <input type="submit" class="btn" name="login" value="Login">
                </div>
            </form>
        </div>
    </div>
</body>
</html>
