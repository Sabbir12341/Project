<?php
// Include your database connection
session_start();
include 'connect.php';

// Query to fetch news from the database
if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
    $sql = "SELECT p.*, r.username 
        FROM posts AS p 
        JOIN registration AS r 
        ON p.user_id = r.id 
        ORDER BY p.created_at DESC";
  // Replace 'news' with your actual table name
    $result = mysqli_query($con, $sql);

    $newsData = array();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Newsfeed</title>
    <link rel="stylesheet" href="newsfeed.css">
</head>

<body>
    <i class="fas fa-bars fa-2x" id="menu-icon"></i>
    <header>
        <h1>Hajee Mohammad Danesh Science & Technology University Alumni</h1>
    </header>

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

    <br>
    <div class="newsfeed-container">
        <h1>Latest News</h1>
        <ul id="newsfeed" class="newsfeed">
            <?php
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $newsData[]=$row;
                        echo "<li>
                            <h2>".$row['title']."</h2>
                            <p>".$row['description']."</p>
                            <p>Posted By: ".$row['username'] ."</p>
                        </li>";
                    }
                }
            ?>
        </ul>
    </div>
</body>

</html>