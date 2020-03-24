<?php
$name = "Asahi";
if ($name == "Asahi") {
    echo "私は $name です。";
} else {
    echo "徳永朝日ではありません。";
}
echo "\n";
$total = 0;
for ($i = 1; $i <= 1000; $i++) {
    $total += $i;
}
echo $total . "\n";
$fruits = array("apple", "banana", "strawberry", "grape", "pineapple");
foreach ($fruits as $fruit) {
    echo "要素は" . $fruit;
    echo "\n";
}
$start = 1;
$end = 100;
for ($i = $start; $i <= $end; $i++) {
    if ($i % 5 == 0) {
        echo $i;
        echo "\n";
    }
}
