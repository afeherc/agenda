<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreaCitasUnionContactos extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('citas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nom')->default('');
			$table->string('slug')->default('');
			$table->string('lloc')->default('');
			$table->date('fecha');
			$table->timestamps();
		});
		
		Schema::create('contactos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nom')->default('');
			$table->string('slug')->default('');
			$table->string('mail')->default('');
			$table->integer('telf');	
			$table->timestamps();
		});

		Schema::create('unions', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('id_cita')->unsigned()->default(0);
			$table->foreign('id_cita')->references('id')->on('citas')->onDelete('cascade');
			$table->integer('id_contacto')->unsigned()->default(0);
			$table->foreign('id_contacto')->references('id')->on('contactos')->onDelete('cascade');
			$table->timestamps();
		});

		
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('contactos');
		Schema::drop('citas');
		Schema::drop('unions');
	}

}
