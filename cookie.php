<?php
ob_start();
function h(string$s):string
{
    return htmlspecialchars($s,ENT_QUOTES);
}

//Cookieから数字を読み込む＋型をINTへ変換
$counter=intval($_COOKIE['counter']?? 1);

echo"あなたがこのサイトを訪れたのは",h(strval($counter)),"回目ですね。";

//Cokkieに設定する値を作成する
$next_counter=strval($counter+1);

//Cookieに値を設定する
setcookie('counter',$next_counter);

ob_end_flush();

