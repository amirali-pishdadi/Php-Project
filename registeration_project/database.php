<!-- Mysql Configuration  -->
<?php 
    // Database Server
    $db_server = "localhost";
    // Database username
    $db_user = "root";
    // Database Password
    $db_pass = "";
    // Database name
    $db_name = "php_project";
    // Database Connection (Dont Edit !)
    $conn = "";
    /* Setting 
    1. start your xampp server
    2. create a database 
    3. create a table with name users
    4. create a columns id (Primary , Unique , Auto increament , int ) 
    , user ( Unique , string )
    , password (CHAR 255 )
    , create_time (type : DATETIME ,  DEFUALT : current_timestamp() )
    */
    try {
        $conn = mysqli_connect($db_server , $db_user , $db_pass , $db_name);
    } catch (mysqli_sql_exception) {
        echo "Couldn't connect ! <br>";
    }
    if ($conn){
        echo "You are connected ! <br>";
    }


 ?>