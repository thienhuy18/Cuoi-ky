
<?php
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "mydb";
session_start();
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
        <header>
            <h1><?php echo $song_name; ?></h1>

        </header>
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
