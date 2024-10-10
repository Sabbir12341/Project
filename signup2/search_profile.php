<?php
//session_start(); // Start the session to use session variables

include 'connect.php'; // Connect to the database
    // Query to get the username and email based on the user_id
    
        $user_id = $_GET['r'];
    $sql = "SELECT username, email, photo,message FROM registration WHERE id = '$user_id'";
    $result = mysqli_query($con, $sql);

    // Fetch the data and assign it to the $username and $email variables
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $message=$row['message'];
        $username = $row['username'];
        $email = $row['email'];
        $photo = $row['photo'];
    } else {
        echo "Error fetching user data: " . mysqli_error($con);
        exit;
    }
//session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile & Newsfeed</title>
    <link rel="stylesheet" href="styles8.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" crossorigin="anonymous" />
</head>
<body>

    <!-- Menu Icon -->
    <i class="fas fa-bars fa-2x" id="menu-icon"></i>

    <!-- Header Section -->
    <header>
        <div class="container">
            <h1>Welcome to the Alumni Network</h1>
            <nav id="menu" class="hidden">
                <ul>
                    <li><a href="1Home.php">Home</a></li>
                    <li><a href="newsfeed.php">Newsfeed</a></li>
                    <li><a href="2Admin.php">Admin</a></li>
                    <li><a href="About.php">About Us</a></li>
                    <li><a href="Event.php">Events</a></li>
                    <li><a href="contacts.php">Contact</a></li>
                    <li><a href="Contribute.php">Contribute</a></li>
                    <li><a href="profile.php">Profile</a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="signup.php">Signup</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Profile Section -->
    <div class="profile-container">
        <div class="profile-header">

            <?php 
                if(isset($photo) && !empty($photo)){
                    echo "
                        <img src='$photo' class='profile-picture'>
                    ";
            }?>
            <h1>Welcome, <?php echo htmlspecialchars($username); ?>!</h1>
            <h2>Email: <?php echo htmlspecialchars($email); ?></h2>
        </div>
            <h2>Posts</h2>
            <!-- Display the user's previous posts -->
            <?php
            $fetchPostsSql = "SELECT p.*, r.username 
            FROM posts AS p 
            JOIN registration AS r 
            ON p.user_id = r.id 
            WHERE p.user_id = '$user_id' 
            ORDER BY p.created_at DESC";
            $postsResult = mysqli_query($con, $fetchPostsSql);
            if ($postsResult && mysqli_num_rows($postsResult) > 0) {
                while ($post = mysqli_fetch_assoc($postsResult)) {
                    echo "<div class='post'>";
                    echo "<h3>" . htmlspecialchars($post['title']) . "</h3>";
                    echo "<p>" . htmlspecialchars($post['description']) . "</p>";
                    echo "<small>Posted on: " . htmlspecialchars($post['created_at']) . "</small>";
                    // Add the delete button with form
                    echo "<form method='POST' action='profile.php'>";
                    echo "<input type='hidden' name='delete_post_id' value='" . $post['id'] . "'>";
                    echo "<input type='submit' value='Delete' style='background-color: red; color: white;'>";
                    echo "</form>";
                    echo "</div><br>";
                }
            } else {
                echo "<p>No posts yet.</p>";
            }
            ?>
        </div>
    </div>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 Alumni Association. All rights reserved.</p>
    </footer>

    <!-- Toggle Menu Script -->
    <script>
        const menuIcon = document.getElementById('menu-icon');
        const menu = document.getElementById('menu');

        // Toggle the 'hidden' class to show/hide the menu
        menuIcon.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });
    </script>
</body>
</html>
