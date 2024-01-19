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
        Schema::create('foto', function (Blueprint $table) {
            $table->id("fotoID");
            $table->string("judulFoto")->unique();
            $table->string("deskripsiFoto");
            $table->date("tanggalUnggah");
            $table->string("lokasiFile");
            $table->unsignedBigInteger("albumID");
            $table->unsignedBigInteger("userID");


            $table->foreign("albumID")->references("albumID")->on("album");
            $table->foreign("userID")->references("userID")->on("users");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fotos');
    }
};
