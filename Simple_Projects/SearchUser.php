<?php
// names
$file = fopen('./persian-first-names.txt', 'r');
$names = array(
);
if ($file) {
    while (($line = fgets($file)) !== false) {
        $name = trim($line);
        $names[] = $name;
    }
} else {
    echo 'file isnt currect';
}

// search user

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $user_name = $_GET["username"];
    $FoundedName = array();
    foreach ($names as $name) {
        if (stripos($name, $user_name) !== false) {
            $FoundedName[] = $name;
        }
    }

    if (!empty($FoundedName)) {
        $message = "Words found with [ $user_name ] : ";

    } else {
        $message = "Not Found";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Search User</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="">
        <form class="border-black bg-slate-400 py-3 flex items-center justify-center border" method="GET" action="">
            <input class="py-2 px-2 rounded-lg mx-3 outline-double" placeholder="Enter username :" type="text"
                name="username" class="">
            <button class="px-2 py-2 outline-dashed outline-1 rounded-lg" type="submit">Search</button>
        </form>
        <p class="flex justify-center py-3 font-bold text-lg">
            <?php echo $message; ?>
        <ul class="justify-center">
            <?php
            foreach ($FoundedName as $name) {
                echo '<li class="flex justify-center py-3">' . $name . "</li>";
            }
            ?>
        </ul>
        </p>
    </div>
</body>

</html>