<?php 
    session_start();
    if(!isset($_SESSION['email'])) {
      echo "<script>alert('You need to login to continue')</script>";
      header("Location:login.php");
      die();
    }
    $song_id = '';
    if(!empty($_POST['songTitle'])) {
      $song_id = $_POST['songTitle'];
    }
    if(isset($_GET['songTitle'])){
      $_SESSION['songTitle'] = $_GET['songTitle'];
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="my_playlist.css">
    <script src="https://kit.fontawesome.com/ad1797946c.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Sen&display=swap" rel="stylesheet">
    <title>My Playlist</title>
</head>
<body>
<?php include('navbar.php'); ?>
    <header>
      <nav>
        <div class="logo-container">
          <h1 class="logo">Music<span>Universe</span></h1>
        </div>
        <div class="menu-container">
          <ul class="menu-list">
            <li class="menu-items"><a href="homepage.php">Home</a></li>
            <li class="menu-items"><a href="genres1.php">Genres</a></li>
            <li class="menu-items"><a href="artists.php" id="display-link">Artists</a></li>
            <li class="menu-items active"><a href="my_playlists.php">Playlists</a></li>            
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
        <div class="container">
          <div class="playlist-list">
            <form action="add_song_to_playlist.php" class="playlist-add" method="POST">
            <?php 
              require_once('database/database.php');
              $conn = get_connection();
              $sql = "SELECT count(*) as count FROM playlists";
              $stm = $conn->prepare($sql);
              $stm->execute();
              $stm->store_result();
              $stm->bind_result($count);
              $stm->fetch();
              // $count = $stm;
              
              if($count > 0) {
                $stm = $conn->prepare('SELECT * FROM playlists group by name');
                $stm->execute();
                $result = $stm->get_result();
                while($row=$result->fetch_assoc()) {
                  ?>
                    <a class="playlist-link" href="addsongtoplaylist.php?name=<?php echo $row['name'] ?>">

                    
                      <div class="playlist-content">
                        <div class="playlist-img">
                          <img src="images/images.jpg" alt="">
                        </div>
                        <div class="playlist-name">
                          <p><?php echo $row['name']?></p>
                        </div>
                        <div class="playlist-option">
                        
                          <?php 
                            if(isset($_POST['songTitle'])) {
                              ?>
                                <input class="radio-input" type="radio" name="songTitle" value="<?php echo "$song_id"?>">
                              <?php
                            }

                          ?>
                          
                        </div>
                        
                      </div>
                    </a>
          

                  <?php

                }
                echo "<p><a href='create_playlist.php'>Create new playlist</a>...</p>";
              }
              
              else {
                echo "<p>You have not had any playlist yet, <a href='create_playlist.php'>Create one</a>...</p>";
              }
            ?>
              <?php 
                if(isset($_GET['songTitle'])) {
                  ?>
                    <button>add song</button>
                  <?php
                }
              ?>
              
            </form>
          </div>
        </div>
        <script>
            
        </script>
    </main>
</body>
</html>