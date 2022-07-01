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
        Schema::create('produk', function (Blueprint $table) {
            $table->id();
$table->foreignId('pelanggan_id')
->references('id')
->on('pelanggan')
->onDelete('cascade')
->onUpdate('cascade');
$table->string('name', 100);
$table->double('price', 10, 4);
$table->integer('stock')->default(0);
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
        Schema::dropIfExists('produk');
    }
};