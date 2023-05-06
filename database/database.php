<?php

    function get_connection()
    {
        $conn = new mysqli('localhost', 'root', '', 'mydb');
        if ($conn->connect_errno) {
            die('Connect failed with message: ' . $conn->connect_error);
        }
        $conn->set_charset("utf8");
        return $conn;
    }
?>