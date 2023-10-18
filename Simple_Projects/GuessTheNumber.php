<!-- Note -->
<!-- You can enter a number and your number is equal to the random number if you are lucky person  -->
<?php
$user_number = 0;
$random_number = 0;
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $user_number = $_GET["user_number"];
    $max = 100;
    $min = 1;
    $random_number = rand($min, $max);
    if ($user_number == $random_number) {
        $message = "You Are Succsesful [ your number : $user_number = $random_number ] 😍";
    } else {
        $message = "try again [ your number : $user_number != $random_number ] 😐";
    }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guess Number</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="flex justify-center items-center py-5 font-semibold text-lg">
        <?php echo $message ; ?>
    </div>
    <div class="flex py-4 justify-center items-center">
    <form class="flex" method="GET" action="">
        <input class="focus:outline-dashed bg-gradient-to-r from-white to-gray-500 px-2 py-1.5 w-56 rounded-lg text-black text-lg" type="number" name="user_number" placeholder="Enter your number" max="<?php echo $max; ?>"
            min="<?php echo $min; ?>">
        <button class="mx-2 px-6 flex-1 rounded-lg border-black outline-double py-1 font-semibold text-sm" type="submit">Submit</button>
    </form>
    </div>
</body>

</html>