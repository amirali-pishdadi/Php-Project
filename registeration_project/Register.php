<?php
include("./database.php");
session_start();
require_once("DatabaseFunctions.php");

class create_user {
    use DataBase;
}

$new_user = new create_user;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
</head>

<body>
    <div>
        <h3>You are in Register page ~</h3>

        <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
            <label>name: </label>
            <input type="text" name="name">
            <br>
            <label>Password: </label>
            <input type="password" name="password">
            <br>
            <button type="submit" name="send">Send Data</button>
        </form>
    </div>
</body>

</html>

<?php

if(isset($_POST["send"])) {
    $name = filter_input(INPUT_POST, "name" , FILTER_SANITIZE_SPECIAL_CHARS);
    $password = $_POST["password"];



    if(!(empty($name) && empty($password))) {

        $hash = password_hash($password, PASSWORD_DEFAULT);

        echo $hash;


        $new_user->create($name , $hash , $conn);
        

        $_SESSION["name"] = $name;

        $_SESSION["password"] = $hash;


        header("Location: Login.php");
    } else {
        echo "Missing Username/Passwords !";
    }


}
;


?>