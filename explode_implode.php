<?php

$base_string="Stollen;Panettone;Pandoro;Kouglof;Lussekatter";
echo"元の文字列";
var_dump($base_string);

$explode_array=explode(";",$base_string);
echo"explodeした配列\n";
var_dump($explode_array);

$implode_string=implode(";",$explode_array);
echo"implodeで繋げた文字列\n";
var_dump($implode_string);