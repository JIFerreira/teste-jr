<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call('ComissaoTableSeeder');
    }
}


class ComissaoTableSeeder extends Seeder {

	public function run(){

		DB::table('comissao')->insert([
			'nome' => 'Ricardo',
			'email' => 'ricardo@email.com',
            'valorVenda' => 200,
            'valorComissao' => 17
		]);	
	
	}

}