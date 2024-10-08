<?php
// Include your database connection
include 'connect.php';
    // $check_user_sql = "SELECT * FROM registration WHERE username LIKE 'search%'";
    // $result = mysqli_query($con, $check_user_sql);

    // if (mysqli_num_rows($result) > 0) {
        
    // } 



    if (isset($_POST['search'])) {
        $searchTerm = $_POST['search']; 












































































        
        $searchTerm = $con->real_escape_string($searchTerm);
        $sql = "SELECT * FROM registration WHERE username LIKE '%$searchTerm%'";

        $result = $con->query($sql);

        

    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Search Results</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f0f2f5;
    }

    /* Navbar */
    .navbar {
      background-color: #4CAF50;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 10px 20px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .navbar h1 {
      color: white;
      margin: 0;
      font-size: 24px;
    }

    /* Search Bar */
    .search-container {
      display: flex;
      align-items: center;
      background-color: white;
      border-radius: 20px;
      padding: 5px 10px;
      border: 1px solid #ccc;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .search-container input[type="search"] {
      border: none;
      outline: none;
      padding: 10px;
      width: 300px;
      border-radius: 20px;
      margin-right: 10px;
    }

    .search-container input[type="search"]::placeholder {
      color: #999;
    }

    .search-container button {
      background: none;
      border: none;
      cursor: pointer;
      font-size: 18px;
      color: #4CAF50;
    }

    .search-container button:hover {
      color: #333;
    }

    /* Main Content */
    .container {
      max-width: 900px;
      margin: 50px auto;
      padding: 20px;
      background-color: white;
      border-radius: 10px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .container h2 {
      font-size: 28px;
      margin-bottom: 20px;
    }

    .container ul {
      list-style-type: none;
      padding: 0;
    }

    .container li {
      background-color: #f9f9f9;
      padding: 15px;
      margin-bottom: 10px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }

    .container li h3 {
      margin: 0;
      font-size: 20px;
    }

    .container li p {
      margin: 5px 0;
      font-size: 16px;
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <div class="navbar">
    <h1>HSTU University Alumni</h1>
    <form action="search.php" method="POST" class="search-container">
      <input type="search" name="search" placeholder="Search again...">
      <button type="submit">&#128269;</button>
    </form>
  </div>

  <!-- Search Results -->
  <div class="container">
    <h2>Search Results</h2>
    
    <ul>
        <?php 
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "

                    <li>
                        <h3>".$row['username']."</h3>
                        <p>Email: ".$row['Email']."</p>
                    </li>
                    ";
                }
            }else{
                echo "
                    <li>
                        <h3>No result found</h3>
                        <p>We don't have users of that username</p>
                    </li
                    ";
            }
        ?>
    </ul>
  </div>

</body>
</html>
