@extends('padrao.padrao')

@section('conteudo')

<div class="col-md-6 container-center">
	<h1>Nova venda</h1>

	<form action="/comissao/inserido" method="post">

	<input type="hidden" name="_token" value="{{{ csrf_token() }}}">

	<div class="form-group">
		<label>Nome</label>
		<input name="nome" class="form-control" type="text" required/>
	</div>

	<div class="form-group">
		<label>E-mail</label>
		<input name="email" class="form-control" type="email" required/>
	</div>

	<div class="form-group">
		<label>Valor da venda</label>
		<input name="valorVenda" type="number" class="form-control" step="0.01" required/>
	</div>

		<button type="submit" class="btn btn-primary btn-block">Inserir</button>
	</form>
</div>

@stop