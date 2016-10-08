<?php
error_reporting(E_ALL);

$fruits = ["1" => "bananas",
    "apples",
    "berries" => [
    "blueberry", "strawberry"]
];
echo "<pre>";
print_r($fruits);
echo "</pre>";
$fruits []= "cucumber";
$food = ["icecream", "steak", "popcorn", $fruits];
echo "<pre>";
print_r($fruits);
echo "</pre>";
echo "<pre>";
print_r($food);
echo "</pre>";
asort ($food);
echo "<pre>";
print_r($food);
echo "</pre>";

/*$a=5;
$result=$a<=6? "True" : "False";
print $result;
$result2=count ($food[3] ["berries"])!= 3? True :"False";
print $result2;
echo "<br>";
for ($i = 1; $i <= 30; $i=$i+2) {
    echo "{$i} <br>";
}
*/
$flag = true;

for($i = 2; $i <= 100; $i++) {

    for($j = 2; $j < $i; $j++) {
        if($i % $j == 0) {
            $flag = false;
            break;
        }
    }

    if($flag) echo $i."
";
    $flag = true;
}
$HeadCount=0;
$TimesCount=0;
while ($HeadCount < 3){
    $try=rand(0,1);
    $TimesCount ++;
    if ($try) {
        $HeadCount ++;
        echo "Орел ";
    }
    else {
            $HeadCount = 0;
            echo "Решка " ;
        }
    }
    echo 'Количество попыток '.$TimesCount;