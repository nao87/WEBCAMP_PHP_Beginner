<?php

function myfunc(int$i)
{
    $i*=2;
    echo"in myfunc,i is {$i}\n";
}

$i=10;
myfunc($i);
echo"i is {$i}\n";