<head>
  <script src="script.js"></script>
</head>
<?php
session_start();
$songTitle = $_SESSION['songTitle'];

$conn = mysqli_connect('localhost', 'root', '', 'mydb');

if (!$conn) {
  die('Failed to connect to database');
}

if (!empty($_POST['new_playlist'])) {
  $playlist_name = mysqli_real_escape_string($conn, $_POST['new_playlist']);

}
if(empty($_POST['new_playlist'])) {
  $playlist_name = mysqli_real_escape_string($conn, $_POST['playlist']);
}




$query = "INSERT INTO playlists (name,song) VALUES ('$playlist_name', '$songTitle')";
mysqli_query($conn, $query);

mysqli_close($conn);
?>
<p>Song added to playlist!</p>
<a href="playlist.php">See the playlists</a>