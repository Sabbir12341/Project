
<?php

  $login=0;
  $invalid=0;


  if($_SERVER['REQUEST_METHOD']=='POST'){
     include 'connect.php'; // connect to my database

    // $username = $_POST['username']; //php variable = blue username, database variable = red username
     $password = $_POST['password'];
     $email = $_POST['email'];


    //select all fron registration table and check both email and password 
    $sql= "SELECT * FROM registration where email = '$email' and password='$password' ";
    $result = mysqli_query ($con,$sql);
    
    if($result){
      $num= mysqli_num_rows($result);
      if($num>0){

        // Fetch the row
        $row = mysqli_fetch_assoc($result);
        $userId = $row['id']; // Retrieve the id value

        //echo "login successful";
        $login=1;
        //$sql= "SELECT * FROM registration where email = '$email' and password='$password' ";

        session_start(); //saves the start session so that next time you can 
                         //directly log in without password as ur data is previously saved        
        //$_SESSION ['username']=$username;
        $_SESSION['user_id'] = $userId; // Store user id in session
                
        // Echo the user id for debugging purposes (remove in production)
        echo "User ID: " . $userId;

         header('location:profile.php');// creating a header funciton for moving you into
                                         // the home page

      }else{
        //echo "invalid data";
        $invalid=1;
      }

    }

  }
?>










<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HSTU University Alumni Login</title>

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


    <link rel="stylesheet" href="styles17.css">
    <link rel="stylesheet" href="styles8.css">

     
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>
<body>


        <?php
            if($login){
              echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>Success</strong> You are logged up successfully
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>';
            }
        ?>

        <?php
            if($invalid){
              echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong>Error  </strong> Invalid data
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>';
            }
        ?>




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

    
  <br>
    <main>
        <section class="login-container">
            <h1>Login to HSTU Alumni Portal</h1>
            <form action="login.php" method="post">
                
                <label for="email">Email:</label>
                <i class="bx bxs-user"></i>
                <input type="email" id="email" name="email" required>

                <!-- <label for="username">Username</label>
                <i class="bx bxs-user"></i>
                <input type="text"  name="username" > -->
                
                
                <label for="password">Password:</label>
                <i class="bx bxs-lock-alt"></i>
                <input type="password" id="password"  name="password" required >
               

                <div class="options">
                    <label>
                        <input type="checkbox" id="remember" name="remember">
                        Remember Me
                    </label>
                    <a href="#" class="forgot-password">Forgot Password?</a>
                </div>

                <button type = "submit">Login</button>
                <!-- <a href="login.php"><div class="btn_update">&nbsp; Update Profile</div></a> -->
                <p>Not a member? Register</p>
            </form>
        </section>
    </main>


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




