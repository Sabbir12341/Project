<?php
session_start(); // Ensure session_start is called before any output
include'connect.php';
// Check if the form is submitted and the required fields are set
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['event'], $_POST['event_date'], $_POST['message'])) {
        // Safely retrieve and store form data in session variables
        $event = $_POST['event'];
        $date = $_POST['event_date'];
        $message = $_POST['message'];
        
        // Store form data in session
         $_SESSION['event'] = $event;
         $_SESSION['event_date'] = $date;
         $_SESSION['message'] = $message;
        $sql="insert into event_update (date,message,event) values ('$date','$message','$event')";
        $result=mysqli_query($con,$sql);
        } else {
        // Handle case where form data is missing
        echo "Please fill out all required fields.";
    }
    $_SESSION['result']=$result;
    header('location:Event.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile & Newsfeed</title>
    <link rel="stylesheet" href="admin_post.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" crossorigin="anonymous" />
</head>
<body>

    <!-- Menu Icon -->
    <i class="fas fa-bars fa-2x" id="menu-icon"></i>

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

    <!-- Event Content -->
    <div class="event-content">
        <h2>Post Something to the Events</h2>
        <!-- Form to submit a post -->
        <div class="post-form">
            <form method="POST" action="admin_post.php">
                <label for="events"><h3>Choose the event:</h3></label>
                <select id="event" name="event" required>
                    <option value="sports">Sports</option>
                    <option value="cultural">Cultural</option>
                </select>
                <br><br>

                <!-- Date Picker Option -->
                <label for="event-date"><h3>Select Event Date:</h3></label>
                <input type="date" id="event-date" name="event_date" required>
                <br><br>

                <label for="message">Message:</label>
                <textarea id="message" name="message" placeholder="Describe the event..." required></textarea>
                <br>
                <input type="submit" name="submit" value="Submit">
            </form>
        </div>
    </div>

    <!-- Optional JavaScript to handle menu toggle -->
    <script>
        document.getElementById('menu-icon').onclick = function() {
            var menu = document.getElementById('menu');
            if (menu.classList.contains('hidden')) {
                menu.classList.remove('hidden');
            } else {
                menu.classList.add('hidden');
            }
        };
    </script>
</body>
</html>
