<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HSTU Alumni Admin Panel</title>
    <link rel="stylesheet" href="styles12.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
 
    <i class="fas fa-bars fa-2x" id="menu-icon"></i>

    <div class="container"> 
        <!-- Sidebar -->
        <div class="sidebar">
            <h2>HSTU Alumni</h2>
            <div class="profile">
                <img src="CEO.jpg" alt="Admin Profile">
                <h3>Admin Name</h3>
                <p>admin@hstu.edu</p>
        </div>



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


        
        <!-- Main Content -->
        <div class="main-content">
            <div class="header">
               <marquee behavior="" direction=""><h1>Welcome Admin Dashboard</h1></marquee> 
            </div>
            <div class="content">
                <div class="card"> 
                    <h2>User Approval</h2>
                    <p>Manage user approvals for new alumni members.</p>
                </div>
                <div class="card">
                    <h2>Total Members</h2>
                    <p>View the total number of alumni members.</p>
                </div>
                <div class="card">
                    <h2>Alumni Profiles</h2>
                    <a href="profile.html">Click</a>
                    <p>Browse and manage alumni profiles.</p>
                </div>




            </div>
            <br>
            <br>


            <section class="info-section">
                <div class="info-card">
                    <h2>Total Members</h2>
                    <p class="count">50</p>
                    <a href="#" class="btn">Click here</a>
                   
        
                </div>
                <div class="info-card">
                    <h2>Total Events</h2>
                    <p class="count">2</p>
                    <a href="#" class="btn">Click here</a>
              
                </div>
            </section>



        </div>
    </div>



    
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
