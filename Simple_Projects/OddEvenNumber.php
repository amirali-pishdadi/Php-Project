<?php

$list = [];

$odd = [];

$even = [];

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $user_number = $_GET["user_number"];
}


$n = 1;
$i = 0;



while ($n <= $user_number) {
    array_push($list, $n);
    if ($n % 2 == 1) {
        $odd[] = $n;

    } else if ($n % 2 == 0) {
        $even[] = $n;
    }
    $i++;
    $n++;

}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    </head>

<body>
    <div>
        <form action="" class="bg-blue-400 flex flex-col justify-center py-5" method="GET">
        <input class="self-center focus:outline-dashed bg-gradient-to-r from-white to-gray-500 px-2 py-1.5 w-56 rounded-lg text-black text-lg" type="number" min="0" name="user_number" placeholder="Enter your number">
        <button class="self-center mt-3 py-1.5 px-3 rounded-full border-2 border-slate-700" type="submit">Submit</button>
    </form>
    <div class="flex py-3">
    <p class="flex flex-1  justify-center font-bold text-xl items-center self-center">Odd</p>
    <p class="flex flex-1 justify-center font-bold text-xl items-center self-center">Even</p>
    </div>
    <div class="flex">
        <div class="flex border-r-4 border-blue-400 flex-1 justify-center my-5">
        <ul class="self-center ">
                <?php for ($i = 0; $i < count($odd); $i++) {
                        echo "<li class='font-bold px-1 py-1 text-xl'>" . $odd[$i] . "</li>";
                    }
                    ; ?>
                </ul>
            </div>
            <div class="flex flex-1 justify-center my-5">
                <ul class="self-center ">
                    <?php for ($i = 0; $i < count($even); $i++) {
                        echo "<li class='font-bold px-1 py-1 text-xl'>" . $even[$i] . "</li>";
                    }
                    ; ?>
                </ul>
            </div>
        </div>
    </div>
</body>

</html>