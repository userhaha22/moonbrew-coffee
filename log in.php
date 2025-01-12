<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Moon Brew Coffee</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; background-color: #f8f5f1; color: #4e342e; }
        header { background-color: #6d4c41; color: white; text-align: center; padding: 15px; }
        header nav a { margin: 0 10px; color: #fbe9e7; text-decoration: none; font-weight: bold; }
        header nav a:hover { text-decoration: underline; }
        main { padding: 20px; text-align: center; }
        h2 { color: #5d4037; }
        form { max-width: 400px; margin: 0 auto; background-color: #efebe9; padding: 20px; border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); }
        input { width: calc(100% - 20px); padding: 10px; margin-bottom: 15px; border: 1px solid #d7ccc8; border-radius: 5px; }
        button { width: 100%; padding: 10px; background-color: #795548; color: white; border: none; border-radius: 5px; cursor: pointer; font-weight: bold; }
        button:hover { background-color: #5d4037; }
        footer { background-color: #6d4c41; color: white; text-align: center; padding: 10px; position: fixed; bottom: 0; width: 100%; }
    </style>
</head>
<body>
    <header>
        <h1>Moon Brew Coffee</h1>
        <nav>
            <a href="index.html">Home</a>
            <a href="courses.php">Explore Courses</a>
            <a href="login.php">Login</a>
        </nav>
    </header>
    <main>
        <h2>Admin Login</h2>
        <form action="process_login.php" method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
    </main>
    <footer>
        <p>&copy; 2025 Moon Brew Coffee</p>
    </footer>
</body>
</html>
