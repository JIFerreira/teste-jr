<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Informações da comissão</title>
	<link rel="stylesheet" href="/css/app.css">
	<link rel="stylesheet" href="/css/master.css">
</head>
<body>
<nav class="navbar navbar-default">
	<div class="container--nobootstrap">
		
		<div class="navbar-header">
			<a href="/comissao" class="navbar-brand">
				Home
			</a>
		</div>

		<ul class="nav navbar-nav navbar-right">
			<li>
				<a href="{{action('ComissaoController@lista')}}">Listagem</a>
			</li>

			<li>
				<a href="{{action('ComissaoController@formulario')}}">Inserir</a>
			</li>
		</ul>

	</div>
</nav>
<div class="container">
		@yield('conteudo')
</div>
</body>
</html>