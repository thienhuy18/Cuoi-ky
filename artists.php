<?php
    session_start();
    require_once('database/database.php');
    $conn = get_connection();
    if(!isset($_SESSION['email'])) {
        echo "<script>alert('You need to login to continue')</script>";
        header("Location:login.php");
        die();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="artists.css">
    <script src="https://kit.fontawesome.com/ad1797946c.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Sen&display=swap" rel="stylesheet">
    <title>Artists</title>
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
            <li class="menu-items active"><a href="artists.php" id="display-link">Artists</a></li>
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
    <?php 
        require_once('database/database.php');
        $conn = get_connection();
    ?>
    <main>
        <div class="container">
            
            <div class="artist-results">
                
                <div class="artist-list">

                
                <?php 
            
                    
                    $sql = "SELECT artistID, artistName, artistImg FROM artist";
                    $stm = $conn->prepare($sql);
                    $stm->bind_result($get_id, $get_name, $get_img);
                    $stm->execute();

                    while($row=$stm->fetch()) {
                        ?>
                        <div class="artist-content">        
                            <a href="artist_profile.php?aid=<?php echo "$get_id";?>"><img src="images/<?php echo "$get_img"?>" alt="<?php echo "$get_name"?>"></a>
                            <p style="text-align: center; padding-top: 16px; font-size: 18px"><?php echo "$get_name"?></p>
                        </div>
                        <?php
                    }

                    

                ?>
                </div>
            </div>
                
        </div>
    </main>

</body>
</html>