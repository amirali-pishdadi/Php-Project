<?php

function Sum(...$numbers): float
{
    $sum = 0;
    for ($i = 0; $i < count($numbers); $i++) {
        $sum += $numbers[$i];


    }
    return $sum;
}
function Minus(...$numbers): float
{
    $minus = $numbers[0];
    for ($i = 1; $i < count($numbers); $i++) {
        $minus -= $numbers[$i];


    }
    return $minus;
}
function Multiplication(...$numbers): float
{
    $multiplication = 1;
    for ($i = 0; $i < count($numbers); $i++) {
        $multiplication *= $numbers[$i];


    }
    return $multiplication;
}
function Division(...$numbers): float
{
    $division = $numbers[0];
    for ($i = 1; $i < count($numbers); $i++) {
        $division = $division / $numbers[$i];


    }
    return $division;
}
$func = "s";
$final_value = "";
function Calculator($func, ...$numbers): float
{
    if ($func == "su") {
        $final_value = Sum(...$numbers);
    } elseif ($func == "mi") {
        $final_value = Minus(...$numbers);
    } elseif ($func == "mu") {
        $final_value = Multiplication(...$numbers);
    } elseif ($func == "di") {
        $final_value = Division(...$numbers);
    } else {
        $final_value = "";
    }
    return $final_value;


}
// Calculate when get numbers

if (isset($_POST["calculate"])) {
    $number1 = $_POST["number1"];
    $number2 = $_POST["number2"];
    $operation = $_POST["operation"];

    $result = Calculator($operation, $number1, $number2);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calculator</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-200 h-screen flex justify-center items-center">
    <div class="bg-white p-8 rounded-lg">
        <h1 class="text-2xl mb-4">PHP Calculator</h1>
        <form class="" action="" method="post">
            <input class="w-full p-2 mb-4 border" name="number1"
                placeholder="Number 1" type="number" step="0.00000001" required>
            <input class="w-full p-2 mb-4 border" name="number2"
                placeholder="Number 2" type="number" step="0.00000001" required>

            <select name="operation" id="" class="w-full p-2 mb-4 border">
                <option value="su">Sum (+)</option>
                <option value="mi">Minus (-)</option>
                <option value="mu">Multiplication (*)</option>
                <option value="di">Division (/)</option>
            </select>
            <button class="w-full bg-yellow-300 text-yellow-700 p-2 rounded" type="submit"
                name="calculate">Calculate</button>
        </form>
        <p class="flex my-2 p-2 w-full rounded-md bg-red-400 justify-center items-center">Result =
            <?php echo isset($result) ? $result : 0 ?>
        </p>
    </div>
</body>