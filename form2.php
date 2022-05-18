<?php

function h(string$s):string
{
    return htmlspecialchars($s,ENT_QUOTES);
}

$html_form_paras=[
    "pw"=>"パスワード",
    "radio_a"=>"ラジオボタン",
    "check"=>"チェックボックス",
    "sele"=>"セレクトボックス",
    "tarea"=>"テキストエリア",
    "hide"=>"隠れ入力(hidden)",
    
];

$datum=[];
foreach($html_form_paras as $name=>$type){
    $datum[$name]=$_POST[$name]??"";
}
var_dump($datum);