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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('cabang')->nullable();
            $table->string('tipe')->nullable();
            $table->string('nidn')->nullable();
            $table->string('nama')->nullable();
            $table->string('gelar_dpn')->nullable();
            $table->string('gelar_blkg')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->string('tanggal_lahir')->nullable();
            $table->string('alamat')->nullable();
            $table->string('no_hp')->nullable();
            $table->string('kelamin')->nullable();
            $table->string('nama_instansi')->nullable();
            $table->string('alamat_instansi')->nullable();
            $table->string('posisi')->nullable();
            $table->string('s1')->nullable();
            $table->string('fakultas_s1')->nullable();
            $table->string('jurusan_s1')->nullable();
            $table->string('s2')->nullable();
            $table->string('fakultas_s2')->nullable();
            $table->string('jurusan_s2')->nullable();
            $table->string('s3')->nullable();
            $table->string('fakultas_s3')->nullable();
            $table->string('jurusan_s3')->nullable();
            $table->string('email')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
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
};
