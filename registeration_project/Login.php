<?php 
session_start();
include("./database.php");
require_once("DatabaseFunctions.php");

class create_user {
    use DataBase;
}

$search_user = new create_user;
; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
</head>

<body>
    <div>
        <h3>You are in Login page ~</h3>

        <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
            <label>Name: </label>
            <input type="text" name="name">
            <br>
            <label>Password: </label>
            <input type="password" name="password">
            <br>
            <button type="submit" name="send">Send Data</button>
        </form>
        <a href="Register.php">Dont have an account ? Register first !</a>
    </div>
</body>

</html>


<?php
if(isset($_POST["send"])) {


    $name = filter_input(INPUT_POST, "name" , FILTER_SANITIZE_SPECIAL_CHARS);
    $password = $_POST["password"];
    if(! empty($name) && ! empty($password)) {
        
        $user = $search_user->search($name , $conn);
        if ($user){
            
            if ($user["user"] == $name && password_verify($password , $user["password"])) {
                
                $_SESSION["name"] = $name;
                $_SESSION["login"] = true;
                header("Location: index.php");
            } else {
                echo "Incorrect Name/Password !";
            }
        } else {
            echo "There is no user !"; 
        }
        

        
    } else {
        echo "Incorrect Password/Email !";
    }
}

?>