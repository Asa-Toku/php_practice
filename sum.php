<?php
function sum($max)
{
    $result = 0;
    for ($i = 1; $i <= $max; $i++) {
        $result += $i;
    }
    return $result;
}
echo sum(100);
$string = "ABCDE";
echo strlen($string);
$bd = "best day";
$bw = str_replace("day", "way", $bd);
echo $bw;
$array = array(5, 7, 2, 10, 1, 6, 4, 8, 3, 9);
asort($array);
print_r($array);
arsort($array);
print_r($array);
