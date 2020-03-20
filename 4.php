<?php
function double($number)
{
    $result = $number * 2;
    return $result;
}
echo double(100);
echo "\n";
echo double(999);
echo PHP_EOL;
function f($a, $b)
{
    $result = $a + $b;
    return $result;
}
echo f(5, 9);
echo PHP_EOL;
function multi($arr)
{
    $result = $arr[0] * $arr[1] * $arr[2] * $arr[3] * $arr[4];
    return $result;
}
echo multi(array(1, 3, 5, 7, 9));
echo PHP_EOL;
function multi2($arr)
{
    $result = 1;
    foreach ($arr as $a) {
        $result *= $a;
    }
    return $result;
}
echo multi2(array(1, 3, 5, 7, 9));
echo PHP_EOL;
function max_array($arr)
{
    $max_number = $arr[0];
    foreach ($arr as $a) {
        //$max_number<$aならば$max_number=$aを繰り返すと最大値に！
        if ($max_number < $a) {
            $max_number = $a;
        }
    }
    return $max_number;
}
echo max_array(array(1, 2, 3, 4, 5));
echo PHP_EOL;
$result = "<p>Hello!</p>";
echo $result;
echo PHP_EOL;
echo strip_tags($result);
echo PHP_EOL;
$fruits = array("banana", "apple");
array_push($fruits, "pineapple", "grape");
print_r($fruits);
echo PHP_EOL;
$animalz = array("猫" => "cats","犬" => "dogs", "魚" => "fishes");
$animals = array("魚" => "fish", "鳥" => "birds");
$result = array_merge($animalz, $animals);
print_r($result);
echo "\n";
echo "Now:"."1970年1月1日から".time()."秒\n";
echo "yesterday:".date("M-d-Y", mktime(0, 0, 0, 3, 19, 2020))."\n";
echo "today:".date("M-d-Y")."\n";
