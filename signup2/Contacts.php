<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HSTU Alumni Contact</title>
    <link rel="stylesheet" href="styles6.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>

  <i class="fas fa fa-bars fa-2x" id="menu-icon"></i>

    <header>
        <div class="container">
            <h1>Contact Us</h1>
        </div>
    </header>
  
    <nav id="menu" class="hidden">
        <ul>                  
        <li><a href="1Home.php">Home</a></li>
            <li><a href="newsfeed.php">Newsfeed</a></li>
            <li><a href="admin_login.php">Admin</a></li>
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


<div class="hero">

    <section class="contact">
        <div class="container">
            <div class="contact-info">
                <h2>Contact Information</h2>
                <p><strong>Email:</strong> alumni@hstu.ac.bd</p>
                <p><strong>Phone:</strong> +880 123 456 789</p>
                <p><strong>Address:</strong> HSTU Alumni Association, Dinajpur, Bangladesh</p>
            </div>
            <div class="contact-form">
                <h2>Get In Touch</h2>
                <form action="#">
                    <input type="text" name="name" placeholder="Your Name" required>
                    <input type="email" name="email" placeholder="Your Email" required>
                    <textarea name="message" placeholder="Your Message" rows="5" required></textarea>
                    <button type="submit">Send Message</button>
                </form>
            </div>
        </div>
    </section>

</div>

    <footer>
        <div class="container">
            <p>&copy; 2024 HSTU Alumni Association. All rights reserved.</p>
        </div> 
    </footer>


    <script>
        // Get the menu icon and the menu
        const menuIcon = document.getElementById('menu-icon');
        const menu = document.getElementById('menu');

        // Add click event listener to the menu icon
        menuIcon.addEventListener('click', () => {
            // Toggle the 'hidden' class on the menu
            menu.classList.toggle('hidden');
        });
    </script>
  






</body>
</html>
