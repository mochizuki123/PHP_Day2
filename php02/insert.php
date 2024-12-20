<?php

/**
 * 1. index.phpのフォームの部分がおかしいので、ここを書き換えて、
 * insert.phpにPOSTでデータが飛ぶようにしてください。
 * 2. insert.phpで値を受け取ってください。
 * 3. 受け取ったデータをバインド変数に与えてください。
 * 4. index.phpフォームに書き込み、送信を行ってみて、実際にPhpMyAdminを確認してみてください！
 */

//1. POSTデータ取得
$bookname = $_POST ["bookname"]; // name をキーに取得した情報を変数に代入
$url = $_POST ["url"];
$comment = $_POST ["comment"];
$favorite = isset($_POST["favorite"]) ? "True" : "False";


//2. DB接続します
try {
  //ID:'root', Password: xamppは 空白 '' 常にこの設定
  $pdo = new PDO('mysql:dbname=gs_bm_class;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('DBConnectError:'.$e->getMessage());
}

//３．データ登録SQL作成

// 1. SQL文を用意　データ記録のためのSQL文を用意　もう少し省略して記載も可能
$stmt = $pdo->prepare("INSERT INTO 
                      gs_bm_table(id, bookname, url, comment, favorite, date) 
                      VALUES(NULL, :bookname, :url, :comment, :favorite, now() )");

//  2. バインド変数を用意
// Integer 数値の場合 PDO::PARAM_INT
// String文字列の場合 PDO::PARAM_STR
// この行は、SQL文におけるプレースホルダー :name に対して、変数 $name の値をバインドしています。具体的には、以下のことを行っています：
// :name プレースホルダーに $name の値を設定
// 値のデータ型を PDO::PARAM_STR（文字列）として指定 PDO::PARAM_* は、PHPのPDO（PHP Data Objects）拡張モジュールで使用される定数　
// 入力された値はSQLの一部として認識されることなく、単なるデータとして扱われる
// これにより、SQLインジェクション攻撃を防ぎつつ、安全にデータを挿入することができます。


$stmt->bindValue(":bookname", $bookname, PDO::PARAM_STR);
$stmt->bindValue(":url", $url, PDO::PARAM_STR);
$stmt->bindValue(":comment", $comment, PDO::PARAM_STR);
$stmt->bindValue(":favorite", $favorite, PDO::PARAM_INT); 


//  3. 実行
// この行は、準備されたステートメント $stmt を実行し、その結果を $status に格納しています。具体的には、以下のことを行っています：
// $stmt->execute() は、バインドされた変数の値を使用して、SQL文をデータベースに対して実行します。
// 実行結果が成功した場合は true、失敗した場合は false が $status に格納されます。
$status = $stmt->execute();

//４．データ登録処理後
if($status === false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  
  echo '<pre>';
    print_r($error);
    echo '</pre>';

  $error = $stmt->errorInfo();
  exit('ErrorMessage:'.$error[2]);
}else{
  //５．index.phpへリダイレクト
  header("Location: index.php");

}
?>
