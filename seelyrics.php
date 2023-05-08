



<?php 
    session_start();
    require_once('database/database.php');
    $conn = get_connection();
    $is_admin = false;
    if(!isset($_SESSION['email'])) {
        header('Location: login.php');
        die();
    }
    else {
        $email = $_SESSION['email'];
        $sql = "SELECT username FROM user WHERE email = ?";

        $stm = $conn->prepare($sql);
        $stm->bind_param('s', $email);
        $stm->execute();
        $stm->bind_result($username);
        $stm->fetch();
        $stm->close();

        
        

    }
    
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/ad1797946c.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Sen&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="awsome-icons/css/solid.css"> -->
    <style>
      a {
        text-decoration: none;
      }
    </style>
    <script src="js/index.js"></script>
     
  </head>
  <body>
    <header>
      <nav>
        <div class="logo-container">
          <h1 class="logo">Music<span>Universe</span></h1>
        </div>
        <div class="menu-container">
          <ul class="menu-list">
            <li class="menu-items active"><a href="homepage.php">Home</a></li>
            <li class="menu-items"><a href="genres1.php">Genres</a></li>
            <li class="menu-items"><a href="artists.php" id="display-link">Artists</a></li>
            <li class="menu-items"><a href="my_playlists.php">Playlists</a></li>
            <?php 
              if($username === 'admin') {
                ?>
                  <li class="menu-items"><a href="users.php">Users</a></li>
                <?php
              }
            ?>
            
          </ul>
        </div>
        <div class="profile-container">
          <div class="profile">
            
            <div class="avatar" style="text-align: center ">
              <i class="fa-solid fa-circle-user"></i>
            </div>
            <div class="user" style="margin-bottom: 5px;">
                Hi, <span class="username" style="font-size: 15px; color: #6ba4e6"><?= $username ?></span>
            </div>
          </div>
          <div class="account-options" style="margin-left: 10px;">
            <a href="logout.php">Log out</a>
          </div>
        </div>
        
      </nav>
    </header>
    <main>
    <?php
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "mydb";
$song_id = $_POST['songTitle'];
$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$sql = "SELECT * FROM ellipsis WHERE song='$song_id'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 0) {
    echo "Song not found.";
} else {
    $song = mysqli_fetch_assoc($result);
    $song_name = $song['song'];
}
 

    ?>

    <!DOCTYPE html>
    <html>
    <head>
        <title><?php echo $song_name; ?></title>
    </head>
    <body>
            <h1><?php echo $song_name; ?></h1>

        <main>
            <h2>Lyrics</h2>
            <?php
                $sql = "SELECT lyrics FROM ellipsis WHERE song='$song_id'";
                $song_lyrics = mysqli_query($conn, $sql);
                if ($song_lyrics->num_rows > 0) {
                    $row = $song_lyrics->fetch_assoc();
                    echo '<div class="lyrics">' . nl2br($row["lyrics"]) . '</div>';
            ?>
            <h2>Comments</h2>
            <?php
                $comment_sql = "SELECT comment FROM comments WHERE songID='$song_id'";
                $comment_result = mysqli_query($conn, $comment_sql);
                if ($comment_result->num_rows > 0) {
                    while ($row = $comment_result->fetch_assoc()) {
                        echo $row["comment"] . "<br>";
                    }
                } else {
                    echo "No comments found.";
                }
                
            ?>
        </main>
    </body>
    </html>

    <?php
}

mysqli_close($conn);

?>  
    </main>
    <footer>
      <p>&copy; 2023 My Music Website</p>
    </footer>
  </body>
</html>

