<?php
$host = 'localhost';
$user = 'root';
$pass = ''; 
$db = 'mydb'; 
$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT DISTINCT genres FROM songs";
$result = mysqli_query($conn, $sql);

$result_songs = array();

if (isset($_POST['genres'])) {

    $selected_genres = $_POST['genres'];

    $sql = "SELECT * FROM songs WHERE genres = '$selected_genres'";
    $result_songs = mysqli_query($conn, $sql);
}

echo '<h1>Choose a Genre</h1>';
echo '<form method="post">';
echo '<label for="genres">Genre:</label>';
echo '<select id="genres" name="genres">';
echo '<option value="">--Select a genre--</option>';
while ($row = mysqli_fetch_assoc($result)) {
    echo '<option value="' . $row['genres'] . '">' . $row['genres'] . '</option>';
}
echo '</select>';
echo '<button type="submit">Submit</button>';
echo '</form>';

if (isset($selected_genres)) {
    echo '<h2>' . $selected_genres . ' Songs</h2>';
    echo '<ul>';
    while ($row = mysqli_fetch_assoc($result_songs)) {
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
    }
    echo '</ul>';
}

mysqli_close($conn);
?>


