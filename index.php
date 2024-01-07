<?php

$list = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10 , 11];

function Map($data, $func)
{

    $final_data = [];


    foreach ($data as $k => $v) {
        $final_data[$k] = $func($v);
    }


    return $final_data;

}

function doSomething($num)
{
    return $num ** 3;
}

foreach (Map($list, fn($num) => $num ** 2) as $k => $v) {
    echo $v . ", ";
}


?>