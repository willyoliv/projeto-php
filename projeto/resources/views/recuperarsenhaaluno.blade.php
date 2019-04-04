<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<title>Edu Station</title>
	<style>
	header{height:90px;}
	h1{text-align: center;}
	.container{
    margin-top: 5em;
		max-width: 500px;
	}

	</style>

</head>
<body>
	<header>
		<h1 class="text-primary">Edu Station<h1>
		</header>
		<hr>
		<div class  = "container">
			<form action=  "{{url('loginaluno')}}" method="get">
        <input type="email" class="form-control" placeholder="You@email.com" name="email"><br>
				<button type="submit" class="btn btn-lg btn-block btn-outline-primary">Enviar</button><br>
			</form>
		</div>
	</body>
	</html>
