<?php
session_start();
$_SESSION['songTitle'] = $_POST['songTitle'];
?>

<form action="addsongtoplaylist.php" method="post">
  <label for="playlist">Select a playlist:</label>
  <select name="playlist">
    <option value="">-- Select a playlist --</option>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "mydb");
    $query = "SELECT name FROM playlists group by name";
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($result)) {
      echo '<option value="' . $row['name'] . '">' . $row['name'] . '</option>';
    }
    mysqli_close($conn);
    ?>
  </select>
    

  
  <br><br>
  
  <label for="new_playlist">New playlist:</label>
  <input type="text" name="new_playlist" id="new_playlist">
  
  <br><br>


  <button class="add-to-playlist-btn">Add to Playlist</button>



</form>
