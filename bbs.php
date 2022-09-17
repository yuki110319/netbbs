<?php
    //値の受け取りと変数への代入
    $name = $_POST["name"];
    $str = $_POST["str"];

    //日付の取得
    $date = date("Y/n/j G:i:s");

    //投稿番号の取得
    if(file_exists($filename)){
        $num = count(file($filename)) + 1;
    }else{
        $num = 1;
    }

    //投稿の作成
    $coment =$num."<>".$name."<>".$str."<>".$date;

    // ファイルの指定
    $filename = "sample.txt";

    //　ファイルを開く
    $fp = fopen( $filename, "a");

    // ファイルに記入
    fwrite($fp, $comment.PHP_EOL);

    // ファイルを閉じる
    fclose($fp);
?>
