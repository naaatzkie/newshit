<?php
session_start();
if (isset($_SESSION['username'])){
    header("Location: welcome.php");
    exit();
}

$users = [

    "admin" => "1234",

    "michael" => "pass123",

    "student1" => "abc123"

];

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(isset($users[$username]) && $users[$username] === $password) {
        $_SESSION['username'] = $username;
        header("Location: welcome.php");
        exit();
    } else {
        $error = "Invalid username or password!";
    }
}
?>
<!DOCTYPE html>
<html>

<body>
    <h2>Login Page</h2>
    <?php if(isset($error)) echo "<p style='color:red'>$error</p>"; ?>
    <form method="POST">
        <input type="text" name="username" placeholder="Username" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <button type="submit">Login</button>
    </form>
</body>

</html>