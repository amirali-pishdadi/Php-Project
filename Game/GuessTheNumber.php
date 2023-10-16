<p>Hello , this is Guess the Number 
    You Should guess number between 1 to 100 
    if your guess number is true you see this message [ You Are Succsesful ]
    but if your guess number isn't true you see this message [ try again ]
    i hope you win the game :)
</p>

<?php 
$user_number = 0 ;
$random_number = 0;
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $user_number = $_GET["user_number"];
    $max = 100 ;
    $min = 1 ;
    $random_number = rand($min, $max);

    if ($user_number == $random_number) {
        echo "You Are Succsesful [your number : $user_number = $random_number] 😍";
    } else {
        echo "try again [your number : $user_number != $random_number] 😐";
    }
    
}

?>

<form method="GET" action="">

<input type="number" name="user_number" placeholder="Enter your number" max="<?php echo $max; ?>" min="<?php echo $min; ?>">
<button type="submit">Submit</button>
</form>