<?php
// Include your database connection
session_start();
include 'connect.php';
$i=0;
// Check if a post is being approved or rejected
if (isset($_GET['post_id'])) {
    $post_id = $_GET['post_id'];
    // $action=$_GET['action'];
    if (isset($_GET['action']) && $_GET['action'] == 'approve') {
        // Approve the post
        $sql = "UPDATE posts SET status='approved',approval_time=date('Y-m-d H:i:s') WHERE id='$post_id'";
       $result= mysqli_query($con, $sql);
    } elseif (isset($_GET['action']) && $_GET['action'] == 'reject') {
        // Reject the post
        $sql = "UPDATE posts SET status='rejected' WHERE id='$post_id'";
       $result= mysqli_query($con, $sql);
    }
//   $_SESSION['post_id']=$post_id;
    // Redirect to avoid resubmission on refresh
    header('Location: notifications.php');
    exit();
}

// Fetch pending posts
if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
    $sql = "SELECT p.*, r.username 
        FROM posts AS p 
        JOIN registration AS r 
        ON p.user_id = r.id 
        ORDER BY p.created_at DESC";
    $result = mysqli_query($con, $sql);

    $newsData = array();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notifications</title>
    <link rel="stylesheet" href="notifications.css">
</head>

<body>
    <i class="fas fa-bars fa-2x" id="menu-icon"></i>
    <header>
        <h1>Admin Notifications for post approval</h1>
    </header>

    <nav id="menu" class="hidden">
        <ul>
            <li><a href="1Home.php">Home</a></li>
            <li><a href="newsfeed.php">Newsfeed</a></li>
            <!-- <li><a href="2Admin.php">Admin</a></li> -->
            <li><a href="About.php">About Us</a></li>
            <li><a href="Event.php">Events</a></li>
            <li><a href="contacts.php">Contact</a></li>
            <li><a href="Contribute.php">Contribute</a></li>
            <li><a href="profile.php">Profile</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="signup.php">Signup</a></li>
        </ul>
    </nav>

    <br>
    <div class="notification-container">
        <h1 >Latest Pending</h1>
        <ul id="notification" class="notification">
            <?php
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $newsData[]=$row;
                       if($row['status']!='rejected' and $row['status']!='approved') {echo "<li>
                        <div class='post-content'>
                            <h2>".$row['title']."</h2>
                            <p>".$row['description']."</p>
                            <p>Pending From: ".$row['created_at'] ."</p>
                        </div>
                        <br>
                            <div class='approve-btn-container'>
    <form method='GET' action='notifications.php'>
        <input type='hidden' name='post_id' value='{$row['id']}'>
        <button type='submit'  name='action' value='approve' class='btn btn-success'>Approve</button>
    </form>
    <br>
    <form method='GET' action='notifications.php' style='display:inline-block;'>
        <input type='hidden' name='post_id' value='{$row['id']}'>
        <button type='submit' name='action' value='reject' class='btn btn-danger'>Reject</button>
    </form>
</div>

                        </li>";
                       $i++;
                       }
                    }
                }
                $_SESSION['notifications']=$i;
            ?>
        </ul>
    </div>

</body>

</html>