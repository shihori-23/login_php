<?php
//1. POSTデータ取得 insert.phpからコピーしてきた
$id        = $_POST["id"];
$name      = $_POST["name"];
$lid       = $_POST["lid"];
$lpw       = $_POST["lpw"];
$kanri_flg = $_POST["kanri_flg"];
$life_flg  = $_POST["life_flg"];

//2. DB接続します
//*** function化する！  *****************
include("funcs.php");
$pdo = db_conn();

//３．データ登録SQL作成
$sql="UPDATE gs_user_table SET name=:name, lid=:lid, lpw=:lpw, kanri_flg=:kanri_flg, life_flg=:life_flg WHERE id=:id"; //アップデートの時はこれ、変数を直接書くのはNG

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':name', $name, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':lid', $lid, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':lpw', $lpw, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':kanri_flg', $kanri_flg, PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':life_flg', $life_flg, PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute(); //実行してstatusで

//４．データ登録処理後
if($status==false){
    //*** function化する！*****************
    sql_error($stmt);
}else{
    //*** function化する！*****************
    redirect("list.php");
}
?>