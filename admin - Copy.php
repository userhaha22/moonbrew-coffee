<?php include('db.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Moon Brew Coffee</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Moon Brew Coffee</h1>
        <nav>
            <a href="index.html">Home</a>
            <a href="courses.php">Courses</a>
        </nav>
    </header>
    <main class="homepage">
        <!-- Left Section: Admin Actions -->
        <section class="intro">
            <h2>Manage Courses</h2>
            <form action="process_admin.php" method="POST">
                <label for="title">Course Title:</label>
                <input type="text" id="title" name="title" placeholder="Enter course title" required>
                
                <label for="description">Description:</label>
                <textarea id="description" name="description" placeholder="Enter course description" required></textarea>
                
                <button type="submit" name="action" value="add">Add Course</button>
            </form>

            <h3>Existing Courses</h3>
            <ul>
                <?php
                $sql = "SELECT id, title FROM courses";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<li>
                                " . $row['title'] . 
                                " <button onclick=\"window.location.href='process_admin.php?action=edit&id=" . $row['id'] . "';\">Edit</button>
                                <button onclick=\"window.location.href='process_admin.php?action=delete&id=" . $row['id'] . "';\">Delete</button>
                              </li>";
                    }
                }
                ?>
            </ul>
        </section>

        <!-- Right Section: Quick Links -->
        <section class="login">
            <h2>Quick Links</h2>
            <button onclick="window.location.href='courses.php';">View Courses</button>
            <button onclick="window.location.href='index.html';">Go to Homepage</button>
        </section>
    </main>
    <footer>
        <p>&copy; 2025 Moon Brew Coffee</p>
    </footer>
</body>
</html>
