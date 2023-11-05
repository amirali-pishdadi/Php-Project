<?php

function Weather_information(string $city = "Tehran", string $api_key)
{
    $url = file_get_contents("https://api.weatherapi.com/v1/current.json?key=" . $api_key . "&q=" . $city . "&aqi=yes");
    $data = json_decode($url, true);
    $name = $data['location']['name'];
    $condition_text = $data['current']['condition']['text'];
    $condition_icon = $data['current']['condition']['icon'];
    $localtime = $data['location']['localtime'];
    $temperature = $data['current']["temp_c"];
    $fetch_data = array(
        'name'           => $name,
        'condition_text' => $condition_text,
        'icon'           => $condition_icon,
        'time'           => $localtime,
        'temp'           => $temperature,
    );


    return $fetch_data;
}

if (isset($_POST['city_name'])) {
    $city = $_POST['city'];
    $result_data = Weather_information($city, "890a01364faf4bb385b75806230211");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP weather</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="flex w-full bg-gray-900 justify-center p-2 mb-5">
        <form class="flex " action="" method="post">
            <label class="flex items-center text-gray-100" for="city">
                Enter your city :
            </label>
            <input placeholder="City Name" class="flex mx-4 p-2 rounded" type="text" name="city">
            <button class="flex mx-2 p-2 rounded-full items-center bg-cyan-800" type="submit" name="city_name"> Submit
            </button>

        </form>
    </div>
    <div class="flex justify-center items-center">
        <div
            class="flex justify-center items-center flex-col self-center p-8 rounded-md w-60 max-[450px]:w-full sm:px-12 dark:bg-gray-900 dark:text-gray-100 mx-6">
            <div class="text-center">
                <h2 class="text-xl font-semibold">
                    <?php echo isset($result_data["name"]) ? $result_data["name"] : "None"; ?>
                </h2>
                <p class="text-sm dark:text-gray-400">
                    <?php echo isset($result_data["time"]) ? $result_data["time"] : "None"; ?>
                </p>
            </div>
            <img src="<?php echo isset($result_data["icon"]) ? $result_data["icon"] : "./none-1.svg"; ?>"
                class="w-36 h-36 p-3 dark:text-yellow-400 fill-current" alt="">
            <div class="mb-2 text-3xl font-semibold">
                <?php echo isset($result_data["temp"]) ? $result_data["temp"] : "None"; ?>°
            </div>
            <p class="dark:text-gray-400">
                <?php echo isset($result_data["condition_text"]) ? $result_data["condition_text"] : "None"; ?>
            </p>
        </div>
    </div>
</body>

</html>