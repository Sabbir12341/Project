<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HSTU University Alumni</title>
    <link rel="stylesheet" href="styles2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head> 

<body>

    <i class="fas fa-bars fa-2x" id="menu-icon"></i>  <!-- icon tag -->


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



    <section id="home" class="hero">
        <div class="container">

            <marquee class="container__title"   behavior="" direction="">Welcome Our Alumni</marquee>

            <h2>Connecting Alumni Worldwide</h2>
            <p>Join our community and stay connected with fellow alumni.</p>
            <a href="signup.php" class="btn">Join Us</a> 
        </div>
    </section>
    <section id="alumni">
        <h2>Meet Our teacher & Students</h2>
        <div class="alumni-member">
            <img src="teacher.jpg" alt="Alumni 1">
            <h3>Our teacher</h3>
            <p>Professor at University of Excellence</p>
            <a href="#signup" class="btn">Join</a> 
        </div>
        <div class="alumni-member">
            <img src="students.jpg" alt="Alumni 2">
            <h3>Our Students</h3>
            
            <p>Meet our present & previous students</p>
            <a href="Studentlist.html">join</a>
            
        </div>
        <!-- Add more alumni members as needed -->
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
