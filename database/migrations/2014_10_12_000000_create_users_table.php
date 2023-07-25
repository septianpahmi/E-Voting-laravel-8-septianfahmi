<?php

use App\Models\User;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nisn')->unique();
            $table->string('kelas')->nullable();
            $table->string('jeniskelamin')->nullable();
            $table->string('voting')->default(false);
            $table->enum('keterangan',['hadir', 'tidak hadir'])->default('tidak hadir');
            $table->string('level')->default(User::ROLE_USER);
            $table->string('password');
            $table->foreignId('id_calon')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
