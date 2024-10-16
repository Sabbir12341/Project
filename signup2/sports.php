<?php
session_start(); // Start the session to use session variables

include 'connect.php'; // Connect to the database

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the session is set and contains the user's id
    if (isset($_SESSION['user_id'])) {

        $user_id = $_SESSION['user_id'];
        $username = $_SESSION['username'];
        $sports = $_POST['sport'];
        $email = $_POST['email'];
        echo "Registration completed successfully";
        
        // Insert into the events table for the sports category
        $sql = "INSERT INTO events (username, email, event, user_id) VALUES ('$username', '$email', '$sports', '$user_id')";
        $result = mysqli_query($con, $sql);

        // Error handling if needed
        if (!$result) {
            echo "Registration failed: " . mysqli_error($con);
        }

    } else {
        echo "No user is logged in.";
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HSTU Alumni Sports Event</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" crossorigin="anonymous" />
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }
        header {
            background-color: #1E88E5;
            color: white;
            padding: 20px 0;
            text-align: center;
        }
        header h1 {
            margin: 0;
            font-size: 2em;
        }
        nav {
            background-color: #1565C0;
            padding: 10px;
            text-align: center;
        }
        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }
        nav ul li {
            display: inline;
            margin: 0 15px;
        }
        nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }
        nav ul li a:hover {
            color: #ff4081;
        }
        section {
            margin: 20px;
        }
        h2 {
            color: #1565C0;
            margin-bottom: 10px;
        }
        p {
            margin: 10px 0;
        }
        #events ul {
            padding-left: 20px;
        }
        #events li {
            margin-bottom: 5px;
        }
        #register form {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        #register label {
            display: block;
            margin-bottom: 8px;
        }
        #register input, #register select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        #register button {
            background-color: #1565C0;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }
        #register button:hover {
            background-color: #ff4081;
        }
        footer {
            background-color: #1565C0;
            color: white;
            text-align: center;
            padding: 15px;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
        /* Menu icon */
        #menu-icon {
            position: fixed;
            top: 20px;
            left: 20px;
            cursor: pointer;
            color: #1565C0;
            display: none;
        }
        /* Mobile responsive */
        @media (max-width: 768px) {
            nav ul li {
                display: block;
                margin: 10px 0;
            }
            #menu-icon {
                display: block;
            }
            #menu.hidden {
                display: none;
            }
        }
    </style>
</head>
<body>

    <i class="fas fa-bars fa-2x" id="menu-icon"></i>
    <header>
        <h1>Hajee Mohammad Danesh Science & Technology University Alumni Sports Event</h1>
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

    <section id="home">
        <h2>Welcome to the HSTU Alumni Sports Event</h2>
        <p>Join us for an exciting day of sports and friendly competition.</p>
    </section>

    <section id="events">
        <h2>Events</h2>
        <ul>
            <li>Football</li>
            <li>Basketball</li>
            <li>Cricket</li>
            <li>Badminton</li>
            <li>Table Tennis</li>
        </ul>
    </section>

    <section id="schedule">
        <h2>Schedule</h2>
        <p>Details coming soon!</p>
    </section>

    <section id="register">
        <h2>Register for Sports Events</h2>
        <form action="sports.php" method="POST">
            <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id']; ?>">
            <input type="hidden" name="username" value="<?php echo $_SESSION['username']; ?>">

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="sport">Sport:</label>
            <select id="sport" name="sport" required>
                <option value="football">Football</option>
                <option value="basketball">Basketball</option>
                <option value="cricket">Cricket</option>
                <option value="badminton">Badminton</option>
                <option value="table_tennis">Table Tennis</option>
            </select>

            <button type="submit">Register</button>
        </form>
    </section>

    <section id="contact">
        <h2>Contact Us</h2>
        <p>Email: info@hstu-sports-event.com</p>
        <p>Phone: +880 1234 567890</p>
    </section>

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
