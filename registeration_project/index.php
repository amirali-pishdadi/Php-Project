<?php 
    //  Use Database.php for showing connection
    include('database.php');
    
    session_start();
    $login = isset($_SESSION["login"]) ? : false;
    if ($login) {
        $name = $_SESSION["name"];
        echo "Hello {$name}";
    } else {
        echo "Please <a href='Login.php'>Login</a> first <br>";
    }

?>

