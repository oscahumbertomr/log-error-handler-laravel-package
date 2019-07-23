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
            $table->unsignedBigInteger('usuario')->nullable();
            $table->dateTime('fecha_hora')->useCurrent();
            $table->unsignedBigInteger('estatus')->default(1);

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
