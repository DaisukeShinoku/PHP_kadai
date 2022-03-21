<?php
$arr = [0,1];

for($i=2; $i<= 10000; $i++)
{
  $arr[$i] = $arr[$i-2] + $arr[$i-1];
  if($arr[$i] > 10000){
    $arr[$i+1] = "";
    break;
  }
}

echo implode("\n", $arr);