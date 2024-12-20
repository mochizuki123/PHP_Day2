<?php
//共通に使う関数を記述  各ファイルでは定義した関数を参照
//XSS対応（ echoする場所で使用！それ以外はNG ）変数$stg は、関数 h の引数として渡される変数名です。
// 通常、これは文字列（string）を意味する略語として使用
//ENT_QUOTES は、シングルクォート (') とダブルクォート (") の両方をHTMLエンティティに変換するためのフラグ

function h($stg){
  return htmlspecialchars($stg, ENT_QUOTES);
}

// 接続も関数化して各ファイルで参照
// try {
//   //ID:'root', Password: xamppは 空白 '' 常にこの設定
//   $pdo = new PDO('mysql:dbname=gs_db_class;charset=utf8;host=localhost','root','');
// } catch (PDOException $e) {
//   exit('DBConnectError:'.$e->getMessage());
// }
