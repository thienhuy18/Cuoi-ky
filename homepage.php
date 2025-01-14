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
      <form class="form-control" action="search.php" method="GET">
        <input type="search" name="search_input" id="" placeholder="Enter music name">
        <button class="search-btn" type="submit"><i class="fa-solid fa-headphones"></i></button>
      </form>
      <div class="greeting">
        <h1>Welcome to My Music Website</h1>
        <p>Listen to your favorite music anytime, anywhere.</p>
      </div>
      
      <section>
        <h2 class="categories">Top Tracks</h2>
        
        
        <div class="grid-container">
          <div class="item">
             <div class ="item">
              <img src="images/chimsau.jpg" alt="Chim sau">
              <h3>Chìm sâu</h3>
              <p>MCK, Trung Trần</p>
              <audio controls>
                <source src="songs/ChimSau_MCKTrungTran_7205660.ogg" type="audio/ogg">
              </audio>
             </div>  
              <form class="reaction-form"action="my_playlists.php" method="get">
                <input type="hidden" name="songTitle" value="Chìm Sâu">
                <button type="submit"><i class="fa-solid fa-star"></i></button>
                  <a href="songs/ChimSau_MCKTrungTran_7205660.ogg" download class="btn btn-download">
                    <i class="fa-solid fa-download"></i>
                  </a>
              </form> 
              <form class="reaction-form" action="liked_song.php" method="get">
              <input type="hidden" name="songTitle" value="Chìm Sâu">
              <button type="submit">
                <i class="fa-solid fa-heart"></i>
              </button>
            </form>  
              <form class="reaction-form" action="seelyrics.php" method="post">
                <input type="hidden" name="songTitle" value="Chìm Sâu">
                <button type="submit">
                  <i class="fa-solid fa-ellipsis"></i>
                </button>
              </form>   

          </div>
          <div class="item">
            <div class ="item">
                <img src="images/ngu1m.jpg" alt="Ngu mot minh">
                <h3>Ngủ Một Mình</h3>
                <p>HIEUTHUHAI</p>
                <audio controls>
                  <source src="songs/NguMotMinh-HIEUTHUHAINegavKewtiie-8267763.mp3" type="audio/mp3">
                </audio>

            </div>
            <form class="reaction-form" action="my_playlists.php" method="get">
                <input type="hidden" name="songTitle" value="Ngủ Một Mình">
                <button type="submit"><i class="fa-solid fa-star"></i></button>
                <a href="songs/NguMotMinh-HIEUTHUHAINegavKewtiie-8267763.mp3" download class="btn btn-download">
                  <i class="fa-solid fa-download"></i>
                </a>
              </a>
            </form>
            <form class="reaction-form" action="liked_song.php" method="get">
              <input type="hidden" name="songTitle" value="Ngủ Một Mình">
              <button type="submit">
                <i class="fa-solid fa-heart"></i>
              </button>
            </form>    
            <form class="reaction-form" action="seelyrics.php" method="post">
              <input type="hidden" name="songTitle" value="Ngủ Một Mình">
              <button type="submit">
                <i class="fa-solid fa-ellipsis"></i>
              </button>
            </form>    
          </div>   
          
          
          <div class="item">
            <div class ="item">
                <img src="images/mono.jpg" alt="Waiting for you">
                <h3>Waiting For You</h3>
                <p>MONO</p>
                <audio controls>
                  <source src="songs\Waiting For You - MONO_ Onionn.mp3" type="audio/mp3">
                </audio>

            </div>

            <form class="reaction-form" action="my_playlists.php" method="get">
              <input type="hidden" name="songTitle" value="Waiting For You">
              <button type="submit"><i class="fa-solid fa-star"></i></button>
              <a href="songs\Waiting For You - MONO_ Onionn.mp3" download class="btn btn-download">
                <i class="fa-solid fa-download"></i>
              </a>
            </form>
            <form class="reaction-form" action="liked_song.php" method="get">
              <input type="hidden" name="songTitle" value="Waiting For You">
              <button type="submit">
                <i class="fa-solid fa-heart"></i>
              </button>
            </form>    
            <form class="reaction-form" action="seelyrics.php" method="post">
              <input type="hidden" name="songTitle" value="Waiting For You">
              <button type="submit">
                <i class="fa-solid fa-ellipsis"></i>
              </button>
            </form> 
          </div>   
          
          <div class="item">
            <div class ="item">
                <img src="images/tiny.jpg" alt="Tiny love">
                <h3>Tiny Love</h3>
                <p>Thịnh Suy</p>
                <audio controls>
                  <source src="songs\tiny love - Thinh Suy - NhacHay360.mp3" type="audio/mp3">
                </audio>

            </div>

            <form class="reaction-form" action="my_playlists.php" method="get">
              <input type="hidden" name="songTitle" value="Tiny Love">
              <button type="submit"><i class="fa-solid fa-star"></i></button>
              <a href="songs\tiny love - Thinh Suy - NhacHay360.mp3" download class="btn btn-download">
                <i class="fa-solid fa-download"></i>
              </a>
            </form>
            <form class="reaction-form" action="liked_song.php" method="get">
              <input type="hidden" name="songTitle" value="Tiny Love">
              <button type="submit">
                <i class="fa-solid fa-heart"></i>
              </button>
            </form>    
            <form class="reaction-form" action="seelyrics.php" method="post">
              <input type="hidden" name="songTitle" value="Tiny Love">
              <button type="submit">
                <i class="fa-solid fa-ellipsis"></i>
              </button>
            </form> 
          </div>   
          

          <div class="item">
            <div class ="item">
                <img src="images/chungtacuahientai.jpg" alt="Chúng ta của hiện tại">
                <h3>Chúng Ta Của Hiện Tại</h3>
                <p>Sơn Tùng M-TP</p>
                <audio controls>
                  <source src="songs\Chung Ta Cua Hien Tai - Son Tung M-TP.mp3" type="audio/mp3">
                </audio>

            </div>

            <form class="reaction-form" action="my_playlists.php" method="get">
              <input type="hidden" name="songTitle" value="Chúng Ta Của Hiện Tại">
              <button type="submit"><i class="fa-solid fa-star"></i></button>
              <a href="songs\Chung Ta Cua Hien Tai - Son Tung M-TP.mp3" download class="btn btn-download">
                <i class="fa-solid fa-download"></i>
              </a>
            </form>
            <form class="reaction-form" action="liked_song.php" method="get">
              <input type="hidden" name="songTitle" value="Chúng Ta Của Hiện Tại">
              <button type="submit">
                <i class="fa-solid fa-heart"></i>
              </button>
            </form>    
            <form class="reaction-form" action="seelyrics.php" method="post">
              <input type="hidden" name="songTitle" value="Chúng Ta Của Hiện Tại">
              <button type="submit">
                <i class="fa-solid fa-ellipsis"></i>
              </button>
            </form> 
          </div>   
          
        </div>
      </section>
      <section>
        <h2 class="categories">US-UK</h2>
        <div class="grid-container">
          <div class="item">
            <div class ="item">
                <img src="images/die4u.jpg" alt="Die for you">
                <h3>Die For You</h3>
                <p>The Weeknd</p>
                <audio controls>
                  <source src="songs\Die For You (Remix)(audiosong.in).mp3" type="audio/mp3">
                </audio>
            </div>

            <form class="reaction-form" action="my_playlists.php" method="get">
              <input type="hidden" name="songTitle" value="Die For You">
              <button type="submit"><i class="fa-solid fa-star"></i></button>
              <a href="songs\Die For You (Remix)(audiosong.in).mp3" download class="btn btn-download">
                <i class="fa-solid fa-download"></i>
              </a>
            </form>
            <form class="reaction-form" action="liked_song.php" method="get">
              <input type="hidden" name="songTitle" value="Die For You">
              <button type="submit">
                <i class="fa-solid fa-heart"></i>
              </button>
            </form>    
            <form class="reaction-form" action="seelyrics.php" method="post">
              <input type="hidden" name="songTitle" value="Die For You">
              <button type="submit">
                <i class="fa-solid fa-ellipsis"></i>
              </button>
            </form> 
          </div>   
          
          <div class="item">
            <div class ="item">
                <img src="images/sickomode.jpg" alt="Sicko Mode">
                <h3>SICKO MODE</h3>
                <p>Travis Scott,Drake</p>
                <audio controls>
                  <source src="songs\Travis_Scott_Ft_Drake_-_Sicko_Mode_Amebo9ja.com.mp3" type="audio/mp3">
                </audio>
            </div>

            <form class="reaction-form" action="my_playlists.php" method="get">
              <input type="hidden" name="songTitle" value="SICKO MODE">
              <button type="submit"><i class="fa-solid fa-star"></i></button>
              <a href="songs\Travis_Scott_Ft_Drake_-_Sicko_Mode_Amebo9ja.com.mp3" download class="btn btn-download">
                <i class="fa-solid fa-download"></i>
              </a>
            </form>
            <form class="reaction-form" action="liked_song.php" method="get">
              <input type="hidden" name="songTitle" value="SICKO MODE">
              <button type="submit">
                <i class="fa-solid fa-heart"></i>
              </button>
            </form>    
            <form class="reaction-form" action="seelyrics.php" method="post">
              <input type="hidden" name="songTitle" value="SICKO MODE">
              <button type="submit">
                <i class="fa-solid fa-ellipsis"></i>
              </button>
            </form> 
          </div>   
          
          <div class="item">
            <div class ="item">
                <img src="images/lilnas.jpg" alt="Industry Baby">
                <h3>Industry Baby</h3>
                <p>Lil Nas X</p>
                <audio controls>
                  <source src="songs\Lil-Nas-X-Ft-Jack-Harlow-Industry-Baby-(TrendyBeatz.com).mp3" type="audio/mp3">
                </audio>


            </div>
            <form class="reaction-form" action="my_playlists.php" method="get">
              <input type="hidden" name="songTitle" value="Industry Baby">
              <button type="submit"><i class="fa-solid fa-star"></i></button>
              <a href="songs\Lil-Nas-X-Ft-Jack-Harlow-Industry-Baby-(TrendyBeatz.com).mp3" download class="btn btn-download">
                <i class="fa-solid fa-download"></i>
              </a>
            </form>
            <form class="reaction-form" action="liked_song.php" method="get">
              <input type="hidden" name="songTitle" value="Industry Baby">
              <button type="submit">
                <i class="fa-solid fa-heart"></i>
              </button>
            </form>    
            <form class="reaction-form" action="seelyrics.php" method="post">
              <input type="hidden" name="songTitle" value="Industry Baby">
              <button type="submit">
                <i class="fa-solid fa-ellipsis"></i>
              </button>
            </form> 
          </div>
          <div class="item">
            <div class ="item">
                <img src="images/humble.jpg" alt="Humble">
                <h3>HUMBLE</h3>
                <p>Kendrick Lamar</p>
                <audio controls>
                  <source src="songs/Kendrick-Lamar-HUMBLE..mp3" type="audio/mp3">
                </audio>
              </div>   
              <form class="reaction-form" action="my_playlists.php" method="get">
                <input type="hidden" name="songTitle" value="HUMBLE">
                <button type="submit"><i class="fa-solid fa-star"></i></button>
                <a href="songs/Kendrick-Lamar-HUMBLE..mp3" download class="btn btn-download">
                  <i class="fa-solid fa-download"></i>
                </a>
              </form>
              <form class="reaction-form" action="liked_song.php" method="get">
              <input type="hidden" name="songTitle" value="HUMBLE">
              <button type="submit">
                <i class="fa-solid fa-heart"></i>
              </button>
            </form>    
              <form class="reaction-form" action="seelyrics.php" method="post">
                <input type="hidden" name="songTitle" value="HUMBLE">
                <button type="submit">
                  <i class="fa-solid fa-ellipsis"></i>
                </button>
              </form>  
          </div>
          <div class="item">
            <div class ="item">
                <img src="images/paris.jpg" alt="Paris in the rain">
                <h3>Paris In The Rain</h3>
                <p>Lauv</p>
                <audio controls>
                  <source src="songs\Lauv Paris In The Rain Lyric Video.mp3" type="audio/mp3">
                </audio>

            </div>

            <form class="reaction-form" action="my_playlists.php" method="get">
              <input type="hidden" name="songTitle" value="Paris In The Rain">
              <button type="submit"><i class="fa-solid fa-star"></i></button>
              <a href="songs\Lauv Paris In The Rain Lyric Video.mp3" download class="btn btn-download">
                <i class="fa-solid fa-download"></i>
              </a>
            </form> 
            <form class="reaction-form" action="liked_song.php" method="get">
              <input type="hidden" name="songTitle" value="Paris In The Rain">
              <button type="submit">
                <i class="fa-solid fa-heart"></i>
              </button>
            </form>    
            <form class="reaction-form" action="seelyrics.php" method="post">
              <input type="hidden" name="songTitle" value="Paris In The Rain">
              <button type="submit">
                <i class="fa-solid fa-ellipsis"></i>
              </button>
            </form> 
          </div>   
        </div>
        <script>
          var audio_playing = document.getElementsByTagName('audio');
          for(var i = 0; i < audio_playing.length; i++) {
            audio_playing[i].addEventListener('play', function() {
              for(var j = 0; j < audio_playing.length; j++) {
                if(audio_playing[j] != this) {
                  audio_playing[j].pause()
                }
              }
            })
          }
        </script>
        
      </section>
      
    </main>
    <footer>
      <p>&copy; 2023 My Music Website</p>
    </footer>
  </body>
</html>
