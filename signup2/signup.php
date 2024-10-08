<?php
// Include your database connection
include 'connect.php';

$invalid = 0;
$user = 0;
$success = 0;

// Assuming you are processing user registration here
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username =  $_POST['username'];
    $email =  $_POST['email'];
    $password =  $_POST['password'];
    $confirm_password = $_POST['c_password'];
    


    if (isset($_POST['photo'])) {
        $targetDir = "uploads/profile-image/";
        
        // File details
        $fileName = basename($_FILES["fileToUpload"]["name"]);
        $targetFilePath = $targetDir . $fileName;
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
    
            $allowedTypes = array('jpg', 'png', 'jpeg', 'gif', 'pdf');
            if (in_array($fileType, $allowedTypes)) {

                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFilePath)) {
                    echo "$fileName";
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            } else {
                echo "Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed.";
            }
    }
    



    // Check if the user already exists
    $check_user_sql = "SELECT * FROM registration WHERE email='$email'";
    $result = mysqli_query($con, $check_user_sql);

    if (mysqli_num_rows($result) > 0) {
        $user = 1; // User already exists
    } else if ($password !== $confirm_password) {
        $invalid = 1; // Passwords don't match
    } else {
        // Hash the password before storing
        // $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Insert the new user into the 'registration' table
        $sql = "INSERT INTO registration (username, email, password) VALUES ('$username', '$email', '$password')";

        if (mysqli_query($con, $sql)) {
            // Get the last inserted user ID
            $user_id = mysqli_insert_id($con);

            // Create a new table for this user
            $table_name = "user_{$user_id}_data"; // Table name is user-specific, using the user ID for uniqueness

            // SQL to create a user-specific table
            $create_table_sql = "CREATE TABLE `$table_name` (
                id INT(11) AUTO_INCREMENT PRIMARY KEY,
                title VARCHAR(255) NOT NULL,
                content TEXT NOT NULL,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            )";

            // Execute the query to create the table
            if (mysqli_query($con, $create_table_sql)) {
                $success = 1; // Success
            } else {
                echo "Error creating user table: " . mysqli_error($con);
            }
        } else {
            echo "Error registering user: " . mysqli_error($con);
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HSTU Alumni Registration</title>
    <link rel="stylesheet" href="styles3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" crossorigin="anonymous" />
</head>

<body>

    <!-- PHP code for message display -->
    <?php if ($user): ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Ohh no sorry</strong> User already exists.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>

    <?php if ($invalid): ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Ohh no sorry</strong> Passwords do not match.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>

    <?php if ($success): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success</strong> You are signed up successfully.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>

    <i class="fas fa-bars fa-2x" id="menu-icon"></i>
    <header>
        <h1>HSTU Alumni</h1>
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

    <div class="container">
        <h2>Alumni Registration</h2>
        <form action="signup.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="photo">Image</label>
                <input type="file" id="photo" name="photo" accept="image/*">
            </div>
            <div class="form-group">
                <label for="username">Full Name</label>
                <input type="text" id="username" name="username" required>
            </div>

            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>

            <div class="form-group">
                <label for="c_password">Confirm Password</label>
                <input type="password" id="c_password" name="c_password" required>
            </div>

            <div class="form-group">
                <label for="graduation-year">Graduation Year</label>
                <input type="number" id="graduation-year" name="graduation-year" required>
            </div>
            <div class="form-group">
                <label for="degree">Degree</label>
                <input type="text" id="degree" name="degree" required>
            </div>
            <div class="form-group">
                <label for="profession">Current Profession</label>
                <input type="text" id="profession" name="profession" required>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" name="message" rows="4"></textarea>
            </div>
            <button type="submit">Register</button>
        </form>
    </div>

    <footer>
        <p>&copy; 2024 HSTU Alumni Association. All rights reserved.</p>
    </footer>

    <script>
        const menuIcon = document.getElementById('menu-icon');
        const menu = document.getElementById('menu');

        menuIcon.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });
    </script>
</body>

</html>