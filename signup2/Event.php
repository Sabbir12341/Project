<?php
session_start(); // Ensure session_start is called before any output
include'connect.php';
$date=$_SESSION['event_date'];
$sql="SELECT date,message,event from event_update";
$result=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HSTU Alumni Events</title>
    <link rel="stylesheet" href="styles4.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>


<i class="fas fa-bars fa-2x " id="menu-icon"></i>

    <header>
        <div class="container">
            <h1>HSTU Alumni Events</h1>
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
    <section class="events">
        <div class="container">
           <marquee class="container__title"  behavior="" direction=""><h2>Upcoming Events</h2></marquee> 
            <div class="event">
                <div class="event-details">
                    <h3>Sports</h3>
                    <?php 
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                    if($row['event']=='sports'){echo"<p class='event-date'>Date: {$row['date']}</p>
                        <p class='event-description'>{$row['message']}</p>
                        <a href='sports.php' class='btn'>Register</a>";
                        break;
                    }
                        }
                    }
                    ?>
                    <!-- <a href="CSE.html">Learn more</a> -->
                </div>
            </div>
            <div class="event">
                <div class="event-details">
                    <h3>Cultural events</h3>
                    <?php
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                    if($row['event']=='cultural'){echo"<p class='event-date'>Date:{$row['date']}</p>
                        <p class='event-description'>{$row['message']}</p>
                        <a href='cultural.php' class='btn'>Register</a>";
                        break;
                    }
                        }
                    }
                    ?>
                </div>
                </div>                
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
