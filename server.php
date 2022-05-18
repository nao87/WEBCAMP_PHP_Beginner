<?php

function h(string$s):string
{
    return htmlspecialchars($s,ENT_QUOTES);
}

echo"ブラウザ(User Agent)は",h($_SERVER['HTTP_USER_AGENT']),"です。<br>\n";
echo"接続元IPは",h($_SERVER['REMOTE_ADDR']),"です。<br>\n";
echo"本当の接続元IPは",h($_SERVER['HTTP_X_FORWARDED_FOR']),"です。<br>\n";

//実務だとこの書き方が多い
$form_ip=$SERVER['HTTP_X_FORWARDED_FOR']??$_SERVER['REMOTE_ADDR']??'';
echo"接続元IPは",h($form_ip),"です。<br>\n";