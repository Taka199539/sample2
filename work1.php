<?php 

// 1. 変数$a に３、　$bに７を代入し、演算
$a = 3;
$b = 7;
echo $a + $b;



// 2. 配列$array_monthsから8月を出力
$array_months = ["1","2","3","4","5","6","7","8","9","10","11","12"];
echo $array_months["7"];



// 3.変数$hello,$name,$worldを連結
$hello = "Hello,";
$name = "Takayuki";
$world = "'s World";

echo $hello . $name . $world;


// 4.$tech_boostを「tech boost」と表示
$tech_boost = "tech";
$tech_boost .="boost";
echo $tech_boost;

// 5.バグ修正 「12月」と表示する
$calender = [
    "January" => "1月",
    "February" => "２月",
    "March" => "3月",
    "April" => "4月",
    "May" => "5月",
    "June" => "6月",
    "July" => "7月",
    "August" => "8月",
    "September" => "9月",
    "October" => "10月",
    "November" => "11月",
    "December" => "12月"
];

echo $calender["December"];