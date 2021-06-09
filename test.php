<?php
//bài 1
function sort_array($array = array())
{
    $newArr = array_chunk($array, 3);
    $result = array();
    for ($i = 0; $i < count($newArr); $i++) {
        $newarray = array_column($newArr, $i);
        $result = array_merge($result, $newarray);
    }
    return $result;
}
//bài 2
function count($mang)
{
    $sophantu = count($mang);
    for ($i = 0; $i < $sophantu - 1; $i++) {
        $max = $i;
        for ($j = $i + 1; $j < $sophantu; $j++) {
            if ($mang[$j] > $mang[$max]) {
                $max = $j;
            }
        }
        $temp = $mang[$i];
        $mang[$i] = $mang[$max];
        $mang[$max] = $temp;
    }
    return $mang[0] +$mang[1];
}
