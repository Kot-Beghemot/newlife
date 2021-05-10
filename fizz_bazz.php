<?php

echo "Give it to me!\n";
$handle = fopen("php://stdin","r");
$number = fgets($handle);
$fizz = 2;
if($fizz % 2 == 0) {
 echo "F\n";
 echo "\n";
}
$bazz = 5;
if($bazz % 5 == 0) {
 echo "B\n";
 echo "\n";
}
?>