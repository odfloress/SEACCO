<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventarios', function (Blueprint $table) {
            $table->id();
            $table->string('item');
            $table->string('type');
            $table->string('name');
            $table->string('status_item');
            $table->string('warranty');
            $table->string('status_name');
            $table->unsignedBigInteger('project_id'); //Se relaciona con tabla proyectos
            $table->bigInteger('price');
            $table->timestamps();

            $table->foreign('project_id')->references('id')
                ->on('proyectos')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inventarios');
    }
}
