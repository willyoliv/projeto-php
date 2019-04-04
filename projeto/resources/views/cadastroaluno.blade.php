<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8"/>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <title>Direção</title>
  <style>
  .container{
    padding-top: 2em;
    max-width: 500px;
  }
  .menu{
    list-style:none;
    float:left;
  }
  .menu li{
    position:relative;
    display: inline-block;
  }
  .menu li a{color:blue; text-decoration:none; padding:5px 10px;}
  .menu li h1{text-align: center;margin-left: 7em;margin-right: 7em;}
  .menu li h3{text-align: left;}
  .menu li a:hover{
    background:blue;
    color:#fff;
    -moz-box-shadow:0 3px 10px 0 #CCC;
    -webkit-box-shadow:0 3px 10px 0 #ccc;
    text-shadow:0px 0px 5px #fff;
  }
  .menu li  ul{
    position:absolute;
    top:25px;
    left:0;
    padding-left: 0px;
    background-color:#fff;
    display:none;
  }
  .menu li:hover ul, .menu li.over ul{display:block;}
  .menu li ul li{
    border:1px solid #c0c0c0;
    display:block;
    width:150px;
  }
  h3{
    padding-top: 10px;
    text-align: center;
  }
  input{
    margin-left: auto;
    margin-bottom: 1em;
  }
  </style>

</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="menu">
        <li class="nav-item">
          <h3 class="text-primary">Edu Station</h3>
        </li>
        <li class="nav-item">
          <h1 class="text-primary">Direção Workstation<h1>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" 		data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Usuário
            </a>
            <ul>
              <div>
                <li><a class="dropdown-item" href="#">Alterar</a></li>
                <li><a class="dropdown-item" href="#">Sair</a></li>
              </div>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
    <h3 class="text-primary">Aluno(a) </h3>
    <hr>
  </div>
  @if( isset($errors) && count($errors) > 0)
  <div class="alert alert-danger">
    @foreach($errors->all() as $error)
    <p>{{$error}}</p>
    @endforeach

  </div>
  @endif
  <div class="container">
    <form class="form" method="post" action="{{route('alunos.store')}}">
      {!! csrf_field() !!}
      <input type="text" class="form-control" placeholder="Nome" name="name" value ="{{old('name')}}">
      <input type="text" class="form-control" placeholder="CPF" name="cpf" value="{{old('cpf')}}">
      <input type="email" class="form-control" placeholder="You@email.com" name="email" value="{{old('email')}}">
      <input type="date" class="form-control" min"1950-01-01" name="nascimento" value="{{old('nascimento')}}">
      <button type="submit" class="btn btn-lg btn-block btn-outline-primary">Criar Usuário</button><br>
    </form>
  </div>
</body>
</html>
