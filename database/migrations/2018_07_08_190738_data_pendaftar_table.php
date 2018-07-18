<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DataPendaftarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dataPendaftar', function (Blueprint $table) {
            $table->increments('IdAnggota');
            $table->string('Nama', 255);
            $table->string('Kelas', 255);
            $table->string('NIS', 10);
            $table->string('TTL', 255);
            $table->text('Alamat');
            $table->enum('Agama', ['Islam', 'Kristen', 'Protestan', 'Konghucu', 'Hindu', 'Budha'])->default('Islam');
            $table->string('NoHPSiswa', 14);
            $table->string('NoHPOrtu', 14);
            $table->string('Instagram', 255);
            $table->string('Line', 255);
            $table->string('Email', 255);
            $table->enum('Gender', ['Laki-Laki', 'Perempuan', 'Lainnya'])->default('Laki-Laki');
            $table->string('AsalSMP', 255);
            $table->text('Motivasi');
            $table->enum('Divisi', ['Web Development', 'Desktop Programming', 'Cinematography', 'Sound Engineering', 'Graphic Design', 'IT Support & IOT'])->default('Web Development');
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
        Schema::dropIfExists('dataPendaftar');
    }
}
