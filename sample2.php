<?php

//My name is tanaka taro. My birth month plus my birth day is 20.
// 私の名前は田中太郎です。生まれ月の数字と生まれた日にちを足すと20になります。

function mystatus(){
  $name = "YK";
  $birth_month = 4;
  $birth_day = 15;
  $month_pluse_day = $birth_month + $birth_day;
  echo "My name is {$name}. \nMy birth month plus my birth day is {$month_pluse_day}.\n";
}

function calculation(){
  $first = 1869 / 456 /2;
  $second = 5974 % 407;
  $third = (78+450)*(4+36);
  $fourth = (5124%9)*(354-28);
  echo $first."\n".$second}\n{$third}\n{$fourth}."\n";
}

//mystatus();
calculation();

?>