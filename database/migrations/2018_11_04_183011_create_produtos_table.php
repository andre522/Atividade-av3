<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('clientes', function (Blueprint $table) {
			$table->increments('id_nome');
			$table->date('data_nascimento');
			$table->string('estado_civil', 25);
			$table->string('telefone', 35);
			$table->string('endereco', 85);
			$table->string('usuario', 15);
			$table->string('senha', 15);
			$table->string('cpf', 17);
			$table->timestamps();
		});

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('produtos');
	}
}
