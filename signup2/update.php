<?php
session_start();
include 'connect.php';
if (isset($_SESSION['r'])) {
    $user_id = $_SESSION['r'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username =  $_POST['name'];
    $email =  $_POST['email'];
    $year =  $_POST['Year'];
    $degree = $_POST['Degree'];
    $message=$_POST['message'];
    $sql = "Update registration set username='$username',Email='$email',Year='$year',Degree='$degree',message='$message' where id='$user_id'";
    $update_post_title="Update posts set title='$username' where user_id='$user_id'";
    $result=mysqli_query($con, $update_post_title);
    $result = mysqli_query($con, $sql);
}
}
else {
    echo "No user is logged in.";
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Alumni Profile - HSTU University</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
    <style>
        .gradient-bg {
            background: linear-gradient(90deg, #3b82f6, #60a5fa);
        }
    </style>
</head>
<body class="bg-gray-100">

    <header class="gradient-bg p-6 text-white text-center shadow-lg">
        <h1 class="text-3xl font-bold">Hajee Mohammad Danesh Science & Technology University Alumni</h1>
        <p class="mt-2 text-lg">Connecting Alumni for a Brighter Future</p>
    </header>

    <nav class="bg-white shadow">
        <div class="flex justify-between items-center p-4">
            <i class="fas fa-bars fa-2x cursor-pointer" id="menu-icon"></i>
            <input type="text" placeholder="Search..." class="border rounded-full pl-10 pr-4 py-2 focus:outline-none focus:ring focus:border-blue-500" />
            <i class="fas fa-search absolute left-3 top-2.5 text-gray-500"></i>
        </div>
        <ul id="menu" class="hidden bg-white">
            <li><a class="block p-3 hover:bg-blue-100 transition-colors" href="1Home.php">Home</a></li>
            <li><a class="block p-3 hover:bg-blue-100 transition-colors" href="newsfeed.php">newsfeed</a></li>
            <li><a class="block p-3 hover:bg-blue-100 transition-colors" href="2Admin.php">Admin</a></li>
            <li><a class="block p-3 hover:bg-blue-100 transition-colors" href="About.php">About Us</a></li>
            <li><a class="block p-3 hover:bg-blue-100 transition-colors" href="Event.php">Events</a></li>
            <li><a class="block p-3 hover:bg-blue-100 transition-colors" href="contacts.php">Contact</a></li>
            <li><a class="block p-3 hover:bg-blue-100 transition-colors" href="Contribute.php">Contribute</a></li>
            <li><a class="block p-3 hover:bg-blue-100 transition-colors" href="profile.php">Profile</a></li>
            <li><a class="block p-3 hover:bg-blue-100 transition-colors" href="login.php">Login</a></li>
            <li><a class="block p-3 hover:bg-blue-100 transition-colors" href="signup.php">Signup</a></li>
            <!-- <li><a class="block p-3 hover:bg-blue-100 transition-colors" href="Dashboard.html">Dashboard</a></li>
            <li><a class="block p-3 hover:bg-blue-100 transition-colors" href="login.html">Login</a></li>
            <li><a class="block p-3 hover:bg-blue-100 transition-colors" href="update.html">Update</a></li>
            <li><a class="block p-3 hover:bg-blue-100 transition-colors" href="Forgate.html">Forgot</a></li>
            <li><a class="block p-3 hover:bg-blue-100 transition-colors" href="signup.html">Signup</a></li> -->
        </ul>
    </nav>

    <main class="container mx-auto p-8">
        <h2 class="text-2xl font-semibold text-center mb-6">Update Your Profile</h2>

        <form class="bg-white p-8 rounded-lg shadow-lg" action="update.php" method='POST'>
            <section class="mb-6">
                <h3 class="text-xl font-semibold mb-4 text-blue-600">Personal Information</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="name" class="block mb-1">Full Name:</label>
                        <input type="text" id="name" name="name"  class="border rounded w-full p-2 focus:outline-none focus:ring focus:border-blue-500" />
                    </div>
                    <div>
                        <label for="email" class="block mb-1">Email Address:</label>
                        <input type="email" id="email" name="email" required  class="border rounded w-full p-2 focus:outline-none focus:ring focus:border-blue-500" />
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="linkedin" class="block mb-1">LinkedIn Address:</label>
                        <input type="url" id="linkedin" name="linkedin"  class="border rounded w-full p-2 focus:outline-none focus:ring focus:border-blue-500" />
                    </div>
                    <!-- <div>
                        <label for="phone" class="block mb-1">Phone Number:</label>
                        <input type="tel" id="phone" name="phone" class="border rounded w-full p-2 focus:outline-none focus:ring focus:border-blue-500" />
                    </div> -->
                </div>
            </section>

            <section class="mb-6">
                <h3 class="text-xl font-semibold mb-4 text-blue-600">Education</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="degree" class="block mb-1">Degree:</label>
                        <input type="text" id="degree" name="Degree" class="border rounded w-full p-2 focus:outline-none focus:ring focus:border-blue-500" />
                    </div>
                    <div>
                        <label for="year" class="block mb-1">Year of Graduation:</label>
                        <input type="number" id="year" name="Year" min="1900" max="2099" step="1"  class="border rounded w-full p-2 focus:outline-none focus:ring focus:border-blue-500" />
                    </div>
                </div>
                <!-- <div>
                    <label for="institution" class="block mb-1">Institution:</label>
                    <input type="text" id="institution" name="institution"  class="border rounded w-full p-2 focus:outline-none focus:ring focus:border-blue-500" />
                </div> -->
            </section>

            <section class="mb-6">
                <h3 class="text-xl font-semibold mb-4 text-blue-600">Additional Information</h3>
                <label for="bio" class="block mb-1">Bio:</label>
                <textarea id="bio" name="message" rows="4" class="border rounded w-full p-2 focus:outline-none focus:ring focus:border-blue-500"></textarea>
            </section>

            <button type="submit" class="bg-blue-600 text-white rounded-lg px-4 py-2 hover:bg-blue-700 transition duration-200">Save Changes</button>
        </form>
    </main>

    <footer class="gradient-bg text-white text-center p-4 mt-6">
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
