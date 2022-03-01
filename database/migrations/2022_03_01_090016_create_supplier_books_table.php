<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupplierBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supplier_books', function (Blueprint $table) {
            $table->id();
            $table->foreignId('supplierId')->references('id')->on('suppliers')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('bookId')->references('id')->on('books')
                ->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('supplier_books');
    }
}
