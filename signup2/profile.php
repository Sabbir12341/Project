<?php
session_start(); // Start the session to use session variables

include 'connect.php'; // Connect to the database

// Check if the session is set and contains the user's id
if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];

    // Handle the form submission for a new post
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['post'])) {
        $postContent = $_POST['post'];
        
        // Insert the post into the newsfeed table
        $insertSql = "INSERT INTO posts (`title`, `description`, `user_id`) VALUES ('$username', '$postContent', '$user_id')";
        $n = mysqli_query($con, $insertSql);
        if ($n) {
            echo "Post added successfully!";
        } else {
            echo "Error adding post: " . mysqli_error($con);
        }
    }

    // Handle the deletion of a post
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_post_id'])) {
        $delete_post_id = $_POST['delete_post_id'];
        
        // Delete the post from the database
        $deleteSql = "DELETE FROM posts WHERE id = '$delete_post_id' AND user_id = '$user_id'";
        $n = mysqli_query($con, $deleteSql);
        if ($n) {
            echo "Post deleted successfully!";
        } else {
            echo "Error deleting post: " . mysqli_error($con);
        }
    }

    //Handle Image upload
    if (isset($_FILES['photo'])) {
        $targetDir = "uploads/image-upload/";
        
        // File details
        $fileName = basename($_FILES["photo"]["name"]);
        $targetFilePath = $targetDir . $fileName;
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
    
        // Check if file was uploaded
        if (!empty($_FILES["photo"]["name"])) {
            // Allow certain file formats (optional)
            $allowedTypes = array('jpg', 'png', 'jpeg', 'gif', 'pdf');
            if (in_array($fileType, $allowedTypes)) {
                // Upload file to server
                if (move_uploaded_file($_FILES["photo"]["tmp_name"], $targetFilePath)) {
                    $sql = "UPDATE registration SET photo = ? WHERE id = ?";
                    $stmt = $con->prepare($sql);
                    $stmt->bind_param("si", $targetFilePath, $user_id);
            
                    if ($stmt->execute()) {
                        echo "The file " . htmlspecialchars($fileName) . " has been uploaded and saved to the database.";
                    } else {
                        echo "Failed to save the file in the database.";
                    }
                
                    // Close the statement
                    $stmt->close();
                
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            } else {
                echo "Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed.";
            }
        } else {
            echo "Please select a file to upload.";
        }
    }


    
    // Query to get the username and email based on the user_id
    $sql = "SELECT username, email, photo FROM registration WHERE id = '$user_id'";
    $result = mysqli_query($con, $sql);

    // Fetch the data and assign it to the $username and $email variables
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $username = $row['username'];
        $email = $row['email'];
        $photo = $row['photo'];
    } else {
        echo "Error fetching user data: " . mysqli_error($con);
        exit;
    }

    

} else {
    echo "No user is logged in.";
    exit;
}
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
        <div class="profile-content">
            <a href="signup.php"><div class="btn_update">&nbsp; Update Profile</div></a>
            <h2>Biography</h2>
            <p>Fahim is a software engineer with a passion for developing innovative programs...</p>

            <form action="profile.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="photo">Update image</label>
                    <input type="file" name="photo" id="photo" accept="image/*" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit">Update</button>
                </div>
            </form>



            <h2>Post Something to the Newsfeed</h2>
            <!-- Form to submit a post -->
            <form method="POST" action="profile.php">
                <textarea name="post" placeholder="What's on your mind?" rows="5" cols="40"></textarea><br>
                <input type="submit" value="Post">
            </form>

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
