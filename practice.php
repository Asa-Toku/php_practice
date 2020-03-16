<?php
$height = 230;
if ($height < 150) {
    echo "150cm未満の方は乗車できません。";
} elseif ($height >= 200) {
    echo "200cm以上の方は乗車できません。";
} else {
    echo "乗車できます。";
}
$weekday="Thursday";
switch ($weekday) {
    case "Monday":
    case "Thursday":
        echo "可燃ごみの日です。";
        break;
    case "Wednesday":
        echo"不燃ごみの日です。";
        break;
    default:
        echo"回収はありません。";
        break;
}
for ($i = 0; $i < 10; $i++) {
    echo $i;
}
$total = 0;
echo $total;
for ($i = 0; $i <= 100; $i++) {
    $total += $i;
}
echo $total;
echo "\n";
$fruit = array("apple", "orange", "peach");
echo count($fruit);
for ($i = 0; $i < count($fruit); $i++) {
    echo "要素は" . $fruit[$i];
    echo "\n";
}
$animals = array("dog", "cat", "panda");
foreach ($animals as $animal) {
    echo "要素は" . $animal;
    echo "\n";
}
