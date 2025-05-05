<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->String('npm', 11);
            $table->String('nama', 30);
            $table->Enum('jk', ['L', 'P']);
            $table->date('tanggal_lahir');
            $table->String('tempat_lahir', 30);
            $table->String('asal_sma', 30);
            $table->foreignId('prodi_id')->constrained('restrict')->onUpdate('restrict');
            $table->String('foto', 50)->nullable();
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
        Schema::dropIfExists('mahasiswas');
    }
};
