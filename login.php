<?php?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <title>Document</title>
    <link rel="stylesheet" href="css/reset.css">
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <header></header>

    <h1 class="main_h1">Back Office Login</h1>

    <form class="form-horizontal form_container" method="POST" action="login_act.php">
      <div class="form-group">
        <label for="exampleInputEmail1">Login ID</label>
        <input
          type="text"
          class="form-control"
          id="exampleInputEmail1"
          placeholder="Email"
        />
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input
          type="password"
          class="form-control"
          id="exampleInputPassword1"
          placeholder="Password"
        />
      </div>
      <button type="submit" class="btn btn-default form_btn">Submit</button>
    </form>

    <footer></footer>
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
    <script src="js/index.js"></script>
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
     width:90%;
}

.form_btn{
     color:#fff;
     background-color: #696969;
     border-color: #696969;
     margin-left:40%;
}

</style>
</html>