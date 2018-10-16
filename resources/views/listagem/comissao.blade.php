@extends('padrao.padrao')

@section('conteudo')

	@if(empty($comissao[0]))
		<div class="alert alert-danger">
			O relatório está vázio, por favor insira uma venda.
		</div>

	@else
		<h1>Relatório de comissões</h1>
		<table class="table table-striped table-bordered table-hover">
		<thead>
			<td>Nome</td>
			<td>e-mail</td>
			<td>valor da venda</td>
			<td>valor da comissão</td>
		</thead>
			@foreach ($comissao as $p)
			<tr>
				<td>{{ $p->nome }}</td>
				<td>{{ $p->email }}</td>
				<td>{{ $p->valorVenda }}</td>
				<td>{{ $p->valorComissao }}</td>
			</tr>
			@endforeach
		</table>
	@endif

@stop