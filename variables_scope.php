<?php

$a=10;
echo"global:a is {$a}\n";

function myFunc()
{
    $b=999;
    echo"In function:b is {$b}\n";
    
    //echo"IN function:a is {$a}\n";  使えない（グローバルで使っているから。引数で入力
}

myFunc();

//echo"global:b is {$b}\n"　　使えない。ローカルで使用しているから。リターンで出力