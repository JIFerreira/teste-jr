<?php

	namespace comissao\Http\Controllers;

	use Illuminate\Support\Facades\DB;
	use comissao\Comissao;
	use Request;

	class ComissaoController extends Controller {

		public function lista() {

			$comissao = comissao::all();
		
			return view('listagem.comissao')
					->with('comissao', $comissao);
		}


		public function formulario(){

			return view('listagem.formulario');
		}

		public function inserido(){

			$nome = Request::input('nome');
			$email = Request::input('email');
			$valorVenda = Request::input('valorVenda');
			$valorComissao = (8.5 / 100) * $valorVenda;

			DB::table('comissao')->insert([
				'nome' => $nome,
				'email' => $email,
				'valorVenda' => $valorVenda,
				'valorComissao' => $valorComissao
			]);


			return redirect()
				->action('ComissaoController@lista');
		}		
	}

?>