<?php

$true = true;
$false = false;

$and = $true && $false;
$or = $true || $false;
$nor = !($true || $false);
$not = !$true;

$a = 1;
$b = 2;
$b2 = '2';
$word1 = "word1";
$word2 = "word2";
$word22 = "word2";

if($a<$b){
    echo "$a jest wiekszy".PHP_EOL;
}else if($b<$a){
    echo "$b jest wiekszy".PHP_EOL;
}else{
    echo "$b jest rowny".PHP_EOL;
}

if($b==$b2){
    echo "nieprawda".PHP_EOL;
} 
if ($b2===$b){
    echo "Taki but".PHP_EOL;
}