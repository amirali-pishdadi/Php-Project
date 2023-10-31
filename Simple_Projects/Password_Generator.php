<?php
function generatePassword(int $length = 8)
{
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_=+|[]{}';
    $password = "";

    $charactersCount = strlen($characters);
    for ($i = 0; $i < $length; $i++) {
        $random = rand(0, $charactersCount - 1);
        $password .= $characters[$random];

    }                   
    return $password;

}


if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $length_password = isset($_GET["length"]) ? $_GET["length"] : 8;
    $g_password = generatePassword($length_password);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="">
        <form class="flex bg-red-400 justify-center items-center py-4" action="" method="GET">
            <input placeholder="Enter Your Own length ..." class="self-center focus:outline-none mx-2 px-5 py-1 rounded-full" type="number" name="length" >
            <button class="flex bg-slate-400 px-3 py-1 rounded-full" type="submit">Send</button>
        </form>
        <div>
            <h1 class="flex px-5 py-2 ">Password :</h1>
            <p class="flex justify-center items-center text-xl font-bold"><?php echo isset($g_password) ? $g_password : "" ; ?></p>
        </div>
    </div>
</body>

</html>