<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbKandidatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_kandidats', function (Blueprint $table) {
            $table->id();
            $table->string('nisn');
            $table->string('nm_kandidat');
            $table->string('nomor');
            $table->text('visi');
            $table->text('misi');
            $table->string('photo', 250);
            $table->integer('suara')->default(0);
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
        Schema::dropIfExists('tb_kandidats');
    }
}
