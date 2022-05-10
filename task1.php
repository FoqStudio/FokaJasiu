<?php

$nazwaZmiennej = 1;
$int = 1;
$float = 2.0;
$string = "tekst";
$bool = true;

var_dump($string);
print $string . PHP_EOL;
echo $int . PHP_EOL;

$array = [$int, $float, $string, $bool, ['nested']];

var_dump($array);

$a = 1;
$b = 10;
$c = 15;
$d = 21;
echo ($a + $b).PHP_EOL;
echo ($b - $a).PHP_EOL;
echo ($b / $a).PHP_EOL;
echo ($b % $a).PHP_EOL;
echo ($b * $a);

$word1 = "Word1";
$word2 = "Word2";
$word3 = "Word3";
$word4 = "Word4";
echo "first word:$word1".PHP_EOL;
echo "second word:$word2".PHP_EOL;
echo "third word:$word3".PHP_EOL;
echo "forth word:$word4".PHP_EOL;
echo sprintf('First word %s, second %s', $word2, $word3).PHP_EOL;