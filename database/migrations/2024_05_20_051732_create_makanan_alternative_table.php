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
        Schema::create('makanan_alternative', function (Blueprint $table) {
            $table->string("kode_makanan")->primary();
            $table->string("nama_makanan");
            $table->integer("karbohidrat");
            $table->integer("lemak");
            $table->integer("protein");
            $table->string("id_kategori");
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
        Schema::dropIfExists('makanan_alternative');
    }
};
