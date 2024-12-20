<?php

require_once('funcs.php');

//1.  DB接続します
/*データソース名（DSN）の指定:
'mysql:dbname=gs_db_class;charset=utf8;host=localhost' は、データソース名（DSN）を指定しています。ここでは、MySQLデータベースに接続するための情報を提供しています。
mysql: 使用するデータベースの種類（ここではMySQL）。
dbname=gs_db_class: 接続するデータベースの名前（ここでは gs_db_class）。
charset=utf8: データベース接続で使用する文字セット（ここでは utf8）。
host=localhost: データベースサーバーのホスト名（ここでは localhost、つまりローカルマシン）。 */

try {
  //Password:MAMP='root',XAMPP=''
//  $pdo = new PDO('*******:dbname=****;charset=utf8;host=*****','****','*****');
    $pdo = new PDO('mysql:dbname=gs_bm_class;charset=utf8;host=localhost','root','');

} catch (PDOException $e) {
  exit('DBConnectError'.$e->getMessage());
}

//２．データ取得SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_bm_table;");
$status = $stmt->execute(); //True or false 

//３．データ表示
$view="";
if ($status===false) {
    //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);

}else{
  //Selectデータの数だけ自動でループしてくれる
  //FETCH_ASSOC=http://php.net/manual/ja/pdostatement.fetch.php 抽出方法は様々　適宜調べる
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){ //While 文で配列で格納されているIDを一行づつ取る
    $view .="<p>"; //1行づつhtml Pタグに入れる
    $view .= $result["date"] . h($result["bookname"]) . h($result["url"]) . h($result ["comment"]) . h($result ["favorite"]); 
    // ドットは追記。ID1のデータがID2で消えないようにViewに追記
    // h は上段で定義した関数の適用　date はユーザから与えられるデータではないので、h関数を適用しない

// echo '<pre>';
// print_r($result);
// echo '</pre>';

    $view .="</p>";
  }

}
?>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>フリーアンケート表示</title>
<link rel="stylesheet" href="css/range.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>div{padding: 10px;font-size:16px;}</style>
</head>
<body id="main">
<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
      <a class="navbar-brand" href="index.php">データ登録</a>
      </div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<div>
    <div class="container jumbotron"><?= $view ?></div>
</div>
<!-- Main[End] -->

</body>
</html>
