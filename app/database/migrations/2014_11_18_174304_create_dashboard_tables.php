<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDashboardTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('projects',function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('description');
            $table->text('observation');
            $table->string('attendant');
            $table->timestamps();
        });

        Schema::create('typesworkers',function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('description');
            $table->decimal('salary');
            $table->timestamps();
        });

        Schema::create('workers',function(Blueprint $table)
        {
            $table->increments('id');

            $table->integer('idtypeworker')->unsigned();
            $table->foreign('idtypeworker')->references('id')->on('typesworkers');

            $table->integer('idproject')->unsigned()->nullable();
            $table->foreign('idproject')->references('id')->on('projects');

            $table->string('first_name');
            $table->string('last_name');
            $table->string('identification');

            $table->timestamps();
        });

        Schema::create('typespayments',function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('description');
            $table->boolean('income')->default(true);
            $table->timestamps();
        });

        Schema::create('payments',function(Blueprint $table)
        {
            $table->increments('id');

            $table->integer('idtypepayment')->unsigned();
            $table->foreign('idtypepayment')->references('id')->on('typespayments');

            $table->integer('idproject')->unsigned();
            $table->foreign('idproject')->references('id')->on('projects');

            $table->decimal('amount');

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
		Schema::drop('workers');
        Schema::drop('typesworkers');
        Schema::drop('payments');
        Schema::drop('typespayments');
        Schema::drop('projects');
	}

}
