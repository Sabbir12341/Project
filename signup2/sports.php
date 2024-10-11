<!-- CSE>php -->
<?php
session_start(); // Start the session to use session variables

include 'connect.php'; // Connect to the database

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the session is set and contains the user's id
    if (isset($_SESSION['user_id'])) {

        $user_id = $_SESSION['user_id'];
        $username = $_SESSION['username'];
        $sports=$_POST['sport'];
        $email=$_POST['email'];
        echo "User ID: " . $user_id;

        if($sports==='football'){
            $sql="insert into football (username,email,user_id) VALUES ('$username', '$email', '$user_id')";
        }
        else{
            $sql="insert into cricket (username,email,user_id) VALUES ('$username', '$email', '$user_id')";
        }
        $result=mysqli_query($con,$sql);

        // if ($result) {
        //     while ($row = mysqli_fetch_assoc($result)) {
        //         // Process the result as needed
        //         echo "Username: " . $row['username'] . ", Football: " . $row['football'] . ", Cricket: " . $row['cricket'];
        //     }
        // } else {
        //     echo "Error fetching records: " . mysqli_error($con);
        //     exit;
        // }

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
    <link rel="stylesheet" href="styles9.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
            <!-- <li><a href="Register.html">Register</a></li> -->
            <!-- <li><a href="Activites.html">Activites</a></li> -->
            <li><a href="Contribute.php">Contribute</a></li>
            <li><a href="profile.php">Profile</a></li>
            <!-- <li><a href="Setting.html">Setting</a></li> -->
            <!-- <li><a href="Dashboard.html">Dashboard</a></li> -->
            <li><a href="login.php">login</a></li>
            <!-- <li><a href="update.html">Update</a></li> -->
            <!-- <li> <a href="Forgate.html">Forgate</a></li> -->
            <li><a href="signup.php">Signup</a></li>
        </ul> 
    </nav>
    <section id="home">
        <h2>Welcome to the HSTU Alumni Sports Event</h2>
        <p>Join us for an exciting day of sports and camaraderie.   
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
    <h2>Register</h2>
        <form action="sports.php" method="POST"> <!-- Make sure this is pointing to the correct file -->
            <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id']; ?>">
            <input type="hidden" name="username" value="<?php echo $_SESSION['username']; ?>"> 
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="sport">Sport:</label>
            <select id="sport" name="sport" required>
                <option id="football" name="football" value="football">Football</option>
                <option id="cricket" name="cricket" value="cricket">Cricket</option>

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
    // Get references to the menu icon and the navigation menu
    const menuIcon = document.getElementById('menu-icon');
    const menu = document.getElementById('menu');

    // Add a click event listener to the menu icon
    menuIcon.addEventListener('click', () => {
        menu.classList.toggle('hidden'); // Toggle the 'hidden' class
    });
</script> 
</body>
</html>
