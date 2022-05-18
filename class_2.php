<?php

class Myclass
{
    const HOGE ='string';
    
    //コンストラクタ
    public function __construct()
    {
        echo"コンストラクタが動いた\n";
    }
    
    public function __destruct()
    {
        //デストラクタ
        echo"デストラクタが動いた\n";
    }
    
}

var_dump(MyClass::HOGE);

//インスタンスを作成する
$obj=new Myclass();