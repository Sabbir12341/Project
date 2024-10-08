<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Alumni Profile - Hstu University</title>
    <link rel="stylesheet" href="styles18.css">

    
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







   

    <div class="container">
        <header>
            <marquee behavior="" direction=""><h1>Update Your Profile</h1></marquee>
        </header>










        <form class="profile-form">
            <section class="form-section">
                <h2>Personal Information</h2>
                <label for="name">Full Name:</label>
                <input type="text" id="name" name="name" required>
                
                <label for="email">Email Address:</label>
                <input type="email" id="email" name="email" required>


                <label for="email">Linkledin Address:</label>
                <input type="email" id="email" name="email" required>


                
                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone">
            </section>

            <section class="form-section">
                <h2>Education</h2>
                <label for="degree">Degree:</label>
                <input type="text" id="degree" name="degree" required>
                
                <label for="year">Year of Graduation:</label>
                <input type="number" id="year" name="year" min="1900" max="2099" step="1" required>
                
                <label for="institution">Institution:</label>
                <input type="text" id="institution" name="institution" required>
            </section>

            <section class="form-section">
                <h2>Additional Information</h2>
                <label for="bio">Bio:</label>
                <textarea id="bio" name="bio" rows="4"></textarea>
            </section>

            <button type="submit">Save Changes</button>
        </form>
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

</html>
