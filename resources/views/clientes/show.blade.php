<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Ver um cliente</title>
</head>
<body>
	<label for="">Nome</label> <br />
	<input type="text" name="nome" value="{{ $cliente->nome }}"> <br /><br />
	<label for="">Sobrenome</label> <br />
	<input type="text" name="sobrenome" value="{{ $cliente->sobrenome }}"> <br /><br />
	<label for="">E-mail</label> <br />
	<input type="text" name="email" value="{{ $cliente->email }}"> <br /><br />
	<label for="">Data de Nascimento</label> <br />
	<input type="text" name="data" value="{{ $cliente->data }}"> <br /><br />
</body>
</html>