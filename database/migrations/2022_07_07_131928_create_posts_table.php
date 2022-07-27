<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('petugas', function (Blueprint $table) {
            $table->id();
            $table->string('foto')->default('admin.png');
            $table->string('nama');
            $table->foreignId('tugas_id');
            $table->foreignId('hari_id');
            $table->foreignId('shift_id');
            $table->timestamps();
        });

        Schema::create('haris', function (Blueprint $table) {
            $table->id();
            $table->string('hari')->unique();
            $table->timestamps();
        });

        Schema::create('tugas', function (Blueprint $table) {
            $table->id();
            $table->string('tugas')->unique();
            $table->timestamps();
        });

        Schema::create('shifts', function (Blueprint $table) {
            $table->id();
            $table->string('shift')->unique();
            $table->timestamps();
        });

        Schema::create('pengunjungs', function (Blueprint $table) {
            $table->id();
            $table->string('foto')->default('user.png');
            $table->string('nama');
            $table->bigInteger('nik');
            $table->bigInteger('hp');
            $table->foreignId('petugas_id');
            $table->timestamps();
        });

        Schema::create('bukus', function (Blueprint $table) {
            $table->id();
            $table->string('serial')->unique();
            $table->string('judul');
            $table->string('pengarang');
            $table->string('penerbit');
            $table->date('thn_terbit');
            $table->foreignId('kategori_id');
            $table->timestamps();
        });

        Schema::create('kategoris', function (Blueprint $table) {
            $table->id();
            $table->string('kategori')->unique();
            $table->timestamps();
        });

        Schema::create('peminjams', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pengunjung_id');
            $table->foreignId('buku_id');
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
        Schema::dropIfExists('posts');
    }
};
