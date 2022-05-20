<?php

$a=0;
$b=1;
$c;

while($b<=10000){
    
    
    $c=$a+$b;
    echo"{$a}\n";
    $b=$a;
    $a=$c;
  
}
