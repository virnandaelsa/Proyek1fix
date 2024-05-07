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
        Schema::create('makanan', function (Blueprint $table) {
            $table->id();
            $table->string('kode_makanan')-> unique();
            $table->string('nama_makanan');
            $table->decimal('protein', 8,3);
            $table->decimal('lemak', 8,3);
            $table->decimal('karbohidrat', 8,3);
            $table->string('kategori');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
