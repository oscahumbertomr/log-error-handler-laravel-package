<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblErrorCachado extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_error_cachado', function (Blueprint $table) {
            $table->bigIncrements('PK_error_cacheado');
            $table->text('mensaje');
            $table->string('url');
            $table->string('controller');
            $table->integer('response_code');
            $table->unsignedBigInteger('FK_usuario')->nullable();
            $table->dateTime('fecha_hora')->useCurrent();
            $table->unsignedBigInteger('FK_estatus')->default(1);
            $table->foreign('FK_usuario')->references('PK_usuario')->on('cat_usuario');
            $table->foreign('FK_estatus')->references('PK_estatus')->on('cat_estatus');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_error_cachado');
    }
}
