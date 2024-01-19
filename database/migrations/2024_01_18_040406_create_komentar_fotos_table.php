<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('komentar_foto', function (Blueprint $table) {
            $table->id("komentarID");
            $table->unsignedBigInteger("fotoID");
            $table->unsignedBigInteger("userID");
            $table->text("isiKomentar");
            $table->date("tanggalKomentar");

            $table->foreign("fotoID")->references("fotoID")->on("foto");
            $table->foreign("userID")->references("userID")->on("users");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('komentar_fotos');
    }
};
