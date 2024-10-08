<?php
// Database connection settings
$host = "localhost";
$user = "root";
$password = ""; // Your MySQL password
$database = "signup"; // Database name

// Connect to the database
$con = mysqli_connect($host, $user, $password, $database);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Fetch news from the database
$sql = "SELECT title, content, created_at FROM newsfeed ORDER BY created_at DESC";
$result = mysqli_query($con, $sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Newsfeed</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        .newsfeed-container {
            padding: 20px;
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
        }

        .newsfeed ul {
            list-style: none;
            padding: 0;
        }

        .newsfeed li {
            background-color: #f9f9f9;
            margin-bottom: 15px;
            padding: 20px;
            border-left: 5px solid #4CAF50;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .newsfeed li h2 {
            margin: 0;
            font-size: 1.5em;
        }

        .newsfeed li p {
            margin: 10px 0 0;
            font-size: 1.1em;
        }

        .newsfeed li small {
            display: block;
            margin-top: 10px;
            color: #999;
        }
    </style>
</head>
<body>

<div class="newsfeed-container">
    <h1>Latest News</h1>

    <div class="newsfeed">
        <ul>
            <?php
            if (mysqli_num_rows($result) > 0) {
                // Output data of each row
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<li>";
                    echo "<h2>" . htmlspecialchars($row['title']) . "</h2>";
                    echo "<p>" . htmlspecialchars($row['content']) . "</p>";
                    echo "<small>Posted on: " . date("F j, Y, g:i a", strtotime($row['created_at'])) . "</small>";
                    echo "</li>";
                }
            } else {
                echo "<p>No news available at the moment.</p>";
            }

            // Close the connection
            mysqli_close($con);
            ?>
        </ul>
    </div>
</div>

</body>
</html>
