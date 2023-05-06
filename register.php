<?php 
    require_once('database/database.php');
    $conn = get_connection();

    
    function user_exist($username, $email) {
        $sql = "SELECT * FROM user where username = ? or email = ?";
        $conn = get_connection();
        $stm = $conn->prepare($sql);
        $stm->bind_param('ss', $username, $email);
        $stm->execute();
        $result = $stm->get_result();

        if ($result->num_rows > 0) {
            return true;
        }

        return false;
    }
    $username = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $pass_check = $_POST['pwd_check'];
    
    if(!isset($username) || !isset($email) || !isset($pass) || !isset($pass_check)) {
        header('Location: register.html');
    }
    
    

    if (user_exist($username, $email)) {
        echo "<p style='font-size: 16px; margin-top: 15px;'>Username or Email has been used. Please try again</p>";
        echo "<button><a style='text-decoration: none; font-size: 16px; color: black;' href='register.html'>Go back to register page</a></button>";
        die();
    }
    if(strlen($pass) < 6 or strlen($username) < 8) {
        echo "<p style='font-size: 16px; margin-top: 15px;'>Username or Password is too short. Please try again</p>";
        echo "<button><a style='text-decoration: none; font-size: 16px; color: black;' href='register.html'>Go back to register page</a></button>";
        die();
    }

    if($pass != $pass_check) {
        echo "<p style='font-size: 16px; margin-top: 15px;'>The passwords are different. Please try again</p>";
        echo "<button><a style='text-decoration: none; font-size: 16px; color: black;' href='register.html'>Go back to register page</a></button>";
    } 
    else {
        $sql = "INSERT INTO user(username, email, password) VALUES (?, ?, ?)";
        $stm = $conn->prepare($sql);
        $stm->bind_param('sss', $username, $email, $pass);

        if(!$stm->execute()) {
            echo "<p style='font-size: 16px; margin-top: 15px;'>Unexpected error occured. Please try again</p>";
            echo "<button><a style='text-decoration: none; font-size: 16px; color: black;' href='register.html'>Go back to register page</a></button>";
        }
        else {
            echo "<p style='font-size: 16px; margin-top: 15px;'>You have successfully create a new account</p>";
            echo "<button><a style='text-decoration: none; font-size: 16px; color: black;' href='login.php'>Click here to log in</a></button>";
        }
        $stm->free_result();
        $stm->close();
    }

    

?>