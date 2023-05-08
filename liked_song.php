


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
            <li class="menu-items"><a href="albums.php">Albums</a></li>
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
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";
$name = $_GET['songTitle'];
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

 $sql = "INSERT INTO liked_song (name) VALUES ('$name')";
  if ($conn->query($sql) === TRUE) {
    echo "Song added to liked song list.";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  if (isset($_POST['delete'])) {
    $song_id = $_POST['song_id'];
    $query = "DELETE FROM liked_song WHERE name = '$song_id'";
    mysqli_query($conn, $query);
}
$sql1 = "SELECT liked_song.name,songs.singer,url FROM liked_song,songs where liked_song.name = songs.name group by liked_song.name";
$result = $conn->query($sql1);
if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}

    echo '<h2> Liked Songs </h2>';
    echo '<ul>';
    
    
    if(mysqli_num_rows($result)>0){
        while ($row = mysqli_fetch_assoc($result)){
            echo '<li>';
            echo '<h3>' . $row['name'] . ' by ' . $row['singer'] . '</h3>';
            if(isset($row['url'])){
                echo '<audio controls>';
                echo '<source src="' . $row['url'] . '" type="audio/mpeg">';
                echo '</audio>';
            }
            else{
                echo 'Your browser does not support the audio element.';
            }
            echo '</li>';
            echo "<td><form method='post'><input type='hidden' name='song_id' value='" . $row["name"] . "'><button type='submit' name='delete'>Delete</button></form></td></tr>";

        }

    }
    echo '</ul>';
$conn->close();
?>
    </main>
  </body>
</html>
