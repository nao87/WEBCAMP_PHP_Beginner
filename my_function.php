<?php

function numToDouble(int $i)
{
    $ret=$i*2;
    
    return $ret;
}

$num=numToDouble(10);
echo"10を２倍にしたら{$num}になった\n";

function numAdd(int$a,int$b)
{
    $ret=$a+$b;
    
    return$ret;
}
$add=numAdd(5,6);
echo"５と６を足したら{$add}になった\n";