
<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Jekyll v3.8.5">
  <title>Login</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <style>
  h4{text-align: left;margin-left: 10px;}
  .container{
    padding-top: 10%;
    max-width: 250px;
    margin-top: 0px;
  }
  a{float: right;}
  input{margin-bottom: 10px;}
  </style>
  <!-- Custom styles for this template -->
  <link href="signin.css" rel="stylesheet">
</head>
<body class="text-center">
  <header>
    <h4 class="text-primary">Edu Station</h4>
    <h1 class="text-primary">Direção Workstation<h1>
    </header>
    <hr>
    <div class="container">
      <form class="form-signin" action= "{{url('homedirecao')}}" method="get">
        <h1 class="h3 mb-3 font-weight-normal">Sign in</h1>

        <input type="email" class="form-control" placeholder="Email address" required autofocus name="email">
        <input type="password" class="form-control" placeholder="Password" required name="password">
        <a href = "">Primeira vez aqui?</a><br>
        <a href = "recuperarsenha">Esqueceu a senha?</a>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>

      </form>
    </div>
  </body>
  </html>
