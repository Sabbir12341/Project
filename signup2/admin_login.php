<?php
  $login=0;
  $invalid=0;
  if($_SERVER['REQUEST_METHOD']=='POST'){
     include 'connect.php'; // connect to my database
    // $username = $_POST['username']; //php variable = blue username, database variable = red username
     $password = $_POST['password'];
     $email = $_POST['email'];
    //select all fron registration table and check both email and password 
    $sql= "SELECT * FROM admin where email = '$email' and password='$password' ";
    $result = mysqli_query ($con,$sql);
    
    if($result){
      $num= mysqli_num_rows($result);
      if($num>0){
        $row = mysqli_fetch_assoc($result);
        $login=1;
        header('location:2Admin.php');// creating a header funciton for moving you into
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
    <title>HSTU Alumni Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 text-gray-800">
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
<header class="bg-blue-600 text-white py-4">
    <h1 class="text-center text-2xl md:text-3xl font-bold">Hajee Mohammad Danesh Science & Technology University CSE Alumni</h1>
</header>

<!-- Responsive container for the login form -->
<div class="container mx-auto mt-8 p-4 bg-white shadow-md rounded-lg max-w-md sm:max-w-lg lg:max-w-xl">
    <form action="#" method="POST">
        <div class="mb-4">
            <label for="email" class="block text-gray-700">Email</label>
            <input type="email" id="email" name="email" required
                class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-300">
        </div>

        <div class="mb-6">
            <label for="password" class="block text-gray-700">Password</label>
            <input type="password" id="password" name="password" required
                class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-300">
        </div>

        <button type="submit"
            class="w-full bg-blue-500 text-white font-bold py-2 rounded hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-300">
            Login
        </button>

        <div class="mt-4 text-center">
            <a href="#" class="text-blue-500 hover:underline">Forgot Password?</a>
        </div>
    </form>
</div>

<footer class="bg-blue-600 text-white mt-8 py-4">
    <div class="container mx-auto text-center">
        <p>&copy; 2024 Hajee Mohammad Danesh Science & Technology University. All rights reserved.</p>
        <p>
            <a href="#" class="hover:underline">Privacy Policy</a> |
            <a href="#" class="hover:underline">Terms of Service</a>
        </p>
    </div>
</footer>

</body>
</html>
