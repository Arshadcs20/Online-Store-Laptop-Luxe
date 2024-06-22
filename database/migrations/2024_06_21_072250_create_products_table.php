<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->string('image_url');
            $table->text('description');
            $table->decimal('original_price', 8, 2);
            $table->decimal('resale_price', 8, 2);
            $table->string('brand');
            $table->string('model');
            $table->string('condition');
            $table->year('purchase_year');
            $table->string('seller_name');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}