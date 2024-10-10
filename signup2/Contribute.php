<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contribute - HSTU University Alumni</title>
    <link rel="stylesheet" href="styles1.css">  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <style>
        /* Search Bar Styling */
        .search-container {
            display: flex;
            align-items: center;
            justify-content: flex-end;
            margin-right: 20px;
            position: fixed;
            right: 0;
            top: 60px;
        }

        .search-box {
            display: flex;
            align-items: center;
            background-color: white;
            border-radius: 20px;
            border: 2px solid #ccc;
            padding: 2px 15px;
            width: 200px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            background-color: #f4fdf4;
        }

        .search-box input[type="text"] {
            border: none;
            outline: none;
            background: none;
            padding: 10px;
            width: 100%;
            font-size: 14px;
            color: #333;
        }

        .search-box input[type="text"]::placeholder {
            color: #999;
        }

        .search-box button {
            background: none;
            border: none;
            cursor: pointer;
            color: #4CAF50;
            font-size: 18px;
        }

        .search-box button i {
            color: #0072ff;
        }

    </style>
</head>

<body>
    <i class="fas fa-bars fa-2x" id="menu-icon"></i>

    <!-- Updated Search Bar -->
    <div class="search-container">
        <form action="search.php" method="POST" class="search-box">
            <div style="display: flex;align-items: center;justify-content: space-between;">
                <div>
                    <input type="text" id="search" name="search" placeholder="Search again...">
                </div>
                <div>
                    <button type="submit"><i class="fas fa-search"></i></button>
                </div>
            </div>
            
        </form>
    </div>

    <header>
        <div class="container">
        <h1>HSTU University Alumni</h1>
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

    <section id="contribute" class="section">
        <div class="container">
            <h2>Contribute</h2>
            <p>Your contributions help us to grow and support our alumni community. Please fill out the form below to contribute your time, skills, or donations.</p>
            <form action="Contribution.php" method="post">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                
                <label for="contribution-type">Contribution Type:</label>
                <select id="contribution-type" name="contribution_type" required>
                    <option value="time">Time</option>
                    <option value="skills">Skills</option>
                    <option value="donation">Donation</option>
                </select>
                
                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="4" required></textarea>
                
                <input type="submit" value="Submit">
            </form>
        </div> 
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2024 HSTU University Alumni Association. All rights reserved.</p>
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
