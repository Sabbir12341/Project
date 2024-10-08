
<?php

  $success=0;
  $user =0;

  if($_SERVER['REQUEST_METHOD']=='POST'){
     include 'connect.php';

     $username = $_POST['username'];
     $password = $_POST['password'];

     $c_password = $_POST['c_password']; //c_password=confirm password
     $invalid=0;

    //$sql = "INSERT INTO `registrations` (`username`, `password`) VALUES ('$username', '$password')";
     
/*      $result = mysqli_query($con, $sql);//con for connection.sql for query
     
      if($result){
      echo "data inserted successfully";
      }
      else{
     die(mysqli_error($con));
      }
 */ 


    $sql= "SELECT * FROM registration WHERE username= '$username' ";
    $result = mysqli_query ($con,$sql);
    
    if($result){
      $num= mysqli_num_rows($result);
      if($num>0){
       // echo "user already exixts";
       $user=1;
      }
      else{
        if($password==$c_password){        
          //insert new user
          $sql = "INSERT INTO `registration` (`username`, `password`) VALUES ('$username', '$password')";
          $insert_result = mysqli_query($con, $sql); //gpt fix     

          if($insert_result){
            //echo "Sign up successful";
            $success=1;
            }
      }
        else{
            //die(mysqli_error($con));
            $invalid=1;
            //header('location:login.php');
          }
        
      }

    }


  }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HSTU Alumni Registration asd</title>
    <link rel="stylesheet" href="styles3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>


<body>

    <!-- php code for message display -->
    <?php
      if($user){
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Ohh no sorry</strong> User already exists.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
      }
    ?>

    <?php
      if($invalid){
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Ohh no sorry</strong> INVALID credentials.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
      }
    ?>    

    <?php
      if($success){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success</strong> You are signed up successfully
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
      }
    ?>
 


    <i class="fas fa-bars fa-2x" id="menu-icon"></i>
    <header>      
            <h1>HSTU Alumni</h1>
    </header>

        <nav id="menu" class="hidden">
            <ul>
                      
            <li><a href="Home1.html">Home</a></li>
            <li><a href="Admin2.html">Admin</a></li>
            <li><a href="About.html">About Us</a></li>
            <li><a href="Event.html">Events</a></li>
            <li><a href="contacts.html">Contact</a></li>
            <li><a href="Register.html">Register</a></li>
            <!-- <li><a href="Activites.html">Activites</a></li> -->
            <li><a href="Contribute.html">Contribute</a></li>
            <li><a href="profile.html">Profile</a></li>
            <!-- <li><a href="Setting.html">Setting</a></li> -->
            <!-- <li><a href="Dashboard.html">Dashboard</a></li> -->
            <li><a href="login.html">login</a></li>
            <!-- <li><a href="update.html">Update</a></li> -->
            <!-- <li> <a href="Forgate.html">Forgate</a></li> -->
            <li><a href="signup.html">Signup</a></li>
                
            </ul>
        </nav>
    

    <div class="container">
        <h2>Alumni Registration  <h2>
        <form action="signup.php" method="post">
            <div class="form-group">
                <label for="username">Full Name</label>
                <input type="text" id="name" name="username" required>
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" placeholder="Enter ur password" name="password">
            </div>
            
            <div class="form-group">
                <label for="exampleInputPassword1">Confirm Password</label>
                <input type="password" class="form-control" placeholder="Confirm password" name="c_password">
            </div>

            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="graduation-year">Graduation Year</label>
                <input type="number" id="graduation-year" name="graduation-year" required>
            </div>
            <div class="form-group">
                <label for="degree">Degree</label>
                <input type="text" id="degree" name="degree" required>
            </div>
            <div class="form-group">
                <label for="profession">Current Profession</label>
                <input type="text" id="profession" name="profession" required>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" name="message" rows="4"></textarea>
            </div>
            <button type="submit">Register</button>
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
