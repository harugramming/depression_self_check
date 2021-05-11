<?php
  require_once('config.php');
  $array_contents = $_POST['array_contents'];
  $id = $_POST['id'];

  //　接続
  $pdo = new PDO(DSN, DB_USER, DB_PASS);

  // //　全削除
  $sql = "DELETE FROM checksheet WHERE id = :id ";

  $stmt = $pdo->prepare($sql);

  $params = array(':id' => $id);
  
  $stmt->execute($params);


  // 全登録

  $count = 0;

  foreach($array_contents as $content)
{
  // INSERT文を変数に格納
  $sql = "INSERT INTO checksheet (id, number, contents) VALUES (:id, :number, :check_content1)";
  
  // 挿入する値は空のまま、SQL実行の準備をする
  $stmt = $pdo->prepare($sql);
  
  // 挿入する値を配列に格納する
  $params = array(
    ':id' => $id,
    ':number' => $count,
    ':check_content1' => $content
  );
  
  // 挿入する値が入った変数をexecuteにセットしてSQLを実行
  $stmt->execute($params);
  
  // 登録完了のメッセージ
  echo '登録完了しました';

  $count++;
}