<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('no_tlp');
            $table->string('title');
            $table->foreignId('category_id');
            $table->foreignId('kecamatan_id');
            $table->string('alamat');
            $table->string('lat')->nullable();
            $table->string('lng')->nullable();
            $table->string('surat_permohonan')->nullable();
            $table->string('notulensi')->nullable();
            $table->string('image')->nullable();
            $table->foreignId('status_id');
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
        Schema::dropIfExists('pendaftarans');
    }
}
