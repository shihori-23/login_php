<?php
//XSS対応（ echoする場所で使用！それ以外はNG ）
function h($str){
    return htmlspecialchars($str, ENT_QUOTES);
}

//DB接続： db_conn()
function db_conn(){
    try {
    return new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','root');
    // $pdo = new PDO('mysql:dbname=gs_db3;charset=utf8;host=localhost','root','root'); //本番用
    // return $pdo; 2種類目
  } catch (PDOException $e) {
    exit('DB Connection Error:'.$e->getMessage());
  }
}

//SQLエラー: sql_error($stmt)
function sql_error($stmt){ //function sql_error($stmt,$error){ とすると汎用性があがる
    $error = $stmt->errorInfo();
    exit("SQLError:".$error[2]);
}


//リダイレクト: redirect($file_name)
function redirect($file_name){
    header("Location: ".$file_name);
    exit();
}






