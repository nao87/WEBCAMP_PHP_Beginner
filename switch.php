<?php

$i=1;
switch($i){
    case 0:
        echo"iは0です\n";
        break;
        
    case 1:
        echo"iは1です\n";
        break;
        
    default:
        echo"iは0と1以外です\n";
        break;
}

//PHP8未満の場合注意
$i=2;
switch($i){
    case '2a':
        echo"iは'2a'です\n";
        break;
    case '2':
        echo"iは'2'(string)です\n";
    case 2:
        echo"iは2(int)です\n";
        break;
}