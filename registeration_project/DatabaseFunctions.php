<?php 

// DataBase Functions
trait DataBase {
    // Create user in database 
    public function create($user , $password /* Must Be Hash */ , $conn /* Connection */ ) {
        $sql = "INSERT INTO users (user , password) VALUES ('$user' , '$password')";

        try {
            mysqli_query($conn , $sql);
            echo "User is now registered !";
            mysqli_close($conn);
        } catch (mysqli_sql_exception) {
            echo "Couldn't register the User !";
        }
    }
    public function search($user , $conn /* Connection */) {
        $sql = "SELECT * FROM users WHERE user = '$user'";

        try {
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0){
                $row = mysqli_fetch_assoc($result);
                mysqli_close($conn);
                return $row;
            } else {
                echo "User not found !";
            }
            
        } catch (mysqli_sql_exception) {
            echo "Couldn't register the User !";
        }
        
    }
}
 ?>