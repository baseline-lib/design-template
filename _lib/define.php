<?php
    define("DB_MODE", 1);					 // データベースモード(0:ローカル /  1:サーバー)
    define("RELEASE", 0);                    // 公開(0:ローカルデモページ / 1:本番)
    ini_set( 'display_errors', 1 );          // エラー表示(0:非表示 /  1:表示)

    define("CLIENT", "ここにクライアント名");           // クライアント名

    // title description 情報
    define("PAGETITLE", CLIENT."様　デザイン画像");
    define("DESCRIPTION", CLIENT."様　デザイン画像");
    define("KEYWORD", CLIENT.", デザイン画像");

    // デザインページ名、デザイン画像ファイル名
    define("PAGE01", "TOPページ");                   //TOPページなど記載
    define("IMAGE01", "top");                       //画像ファイル名を記載
    define("PAGE02", "ページ1");
    define("IMAGE02", "page1");
    define("PAGE03", "ページ2");
    define("IMAGE03", "page2");
    define("PAGE04", "ページ3");
    define("IMAGE04", "page3");
    define("PAGE05", "ページ4");
    define("IMAGE05", "page4");
    define("PAGE06", "ページ5");
    define("IMAGE06", "page5");
    // define("PAGE07", "ページ07");
    // define("IMAGE07", "page07");
    // define("PAGE08", "ページ08");
    // define("IMAGE08", "page08");
    // define("PAGE09", "ページ09");
    // define("IMAGE09", "page09");
    // define("PAGE10", "ページ10");
    // define("IMAGE10", "page10");

?>