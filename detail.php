<?php
$id = $_GET["id"];
include("funcs.php");
$pdo = db_conn();

$stmt = $pdo->prepare("SELECT * FROM gs_user_table WHERE id=:id");
$stmt->bindValue(":id",$id, PDO::PARAM_INT);
$status = $stmt->execute();
if($status==false){
    sql_error($stmt);
}
$row = $stmt->fetch();//$row["id"]

//index.php（登録フォームの画面ソースコードを全コピーして、このファイルをまるっと上書き保存）
?>


<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>データ登録</title>
  <link rel="stylesheet" href="css/reset.css">
  <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
  />
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="list.php">データ一覧</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form class="form-horizontal form_container" method="POST" action="update.php">
  <div class="form-group">

    <legend>編集画面</legend>
     <label>名前</label><input class="form-control" type="text" name="name" value="<?=$row["name"]?>"><br>
     <label>ログインID</label><input class="form-control" type="text" name="lid" value="<?=$row["lid"]?>"><br>
     <label>パスワード</label><input class="form-control" type="text" name="lpw" value="<?=$row["lpw"]?>"><br>
     <label>ステータス</label><input class="form-control" type="text" name="kanri_flg" value="<?=$row["kanri_flg"]?>"><br>
     <label>在籍</label><input class="form-control" type="text" name="life_flg" value="<?=$row["life_flg"]?>"><br>
     <input type="hidden" name="id" value="<?=$row["id"]?>">
     <input type="submit" value="送信" class="btn btn-default form_btn">

  </div>
</form>
<!-- Main[End] -->
<script src="js/jquery-2.1.3.min.js"></script>
<script
  src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
  integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
  crossorigin="anonymous"
></script>
<script
  src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
  integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
  crossorigin="anonymous"
></script>
<script
  src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
  integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
  crossorigin="anonymous"
></script>

</body>
  <style>
body{
     color:#696969;
     padding:20px;
}

.main_h1{
     font-size:20px;
     font-weight:bold;
     text-align:center;
}

form{
     width:50%;
     margin:20px auto;
}
.form_container{
     padding:20px;
     border:solid 1px #c6c6c6;
     border-radius:.25rem;
}

.form-control {
     width:100%;
}

.form_btn{
     color:#fff;
     background-color: #696969;
     border-color: #696969;
     margin-left:40%;
}

</style>
</html>
