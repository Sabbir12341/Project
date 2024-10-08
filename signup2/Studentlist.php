<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumni Profile List</title>
    <link rel="stylesheet" href="styles15.css">
    

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


    <br> <br>



    <div class="container">
        <h1 class="title">Alumni Profiles</h1>
        <div class="profile-list">
            <div class="profile-card">
                <img src="alumni1.jpg" alt="Alumni Photo" class="profile-photo">
                <div class="profile-info">
                    <h2 class="profile-name">John Doe</h2>
                    <p class="profile-degree">B.Sc. in Computer Science, 2020</p>
                    <p class="profile-bio">Currently working as a Software Engineer at XYZ Corp.</p>
                </div>
            </div>
            <div class="profile-card">
                <img src="alumni2.jpg" alt="Alumni Photo" class="profile-photo">
                <div class="profile-info">
                    <h2 class="profile-name">Jane Smith</h2>
                    <p class="profile-degree">B.Sc. in Mathematics, 2018</p>
                    <p class="profile-bio">Pursuing a Master's degree at ABC University.</p>
                </div>
            </div>
            <!-- Add more profiles as needed -->




            <div class="profile-card">
                <img src="alumni2.jpg" alt="Alumni Photo" class="profile-photo">
                <div class="profile-info">
                    <h2 class="profile-name">Jane Smith</h2>
                    <p class="profile-degree">B.Sc. in Mathematics, 2018</p>
                    <p class="profile-bio">Pursuing a Master's degree at ABC University.</p>
                </div>
            </div>




            <div class="profile-card">
                <img src="alumni2.jpg" alt="Alumni Photo" class="profile-photo">
                <div class="profile-info">
                    <h2 class="profile-name">Jane Smith</h2>
                    <p class="profile-degree">B.Sc. in Mathematics, 2018</p>
                    <p class="profile-bio">Pursuing a Master's degree at ABC University.</p>
                </div>
            </div>














        </div>
    </div>

   <br> <br>
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
