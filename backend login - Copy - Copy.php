<?php
include('db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Example query to validate login (replace with your database logic)
    $sql = "SELECT * FROM admins WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "Login successful! Welcome, $username.";
        // Redirect to admin panel (if applicable)
        // header('Location: admin.php');
    } else {
        echo "Invalid username or password. Please try again.";
    }
}
?>
