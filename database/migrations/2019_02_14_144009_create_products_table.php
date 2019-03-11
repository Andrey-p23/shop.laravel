<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('url')->unique();

            $table->integer('author_id')->unsigned()->nullable();
            $table->foreign('author_id')->references('id')
                ->on('authors')->onDelete('cascade');

            $table->integer('pages');
            $table->integer('year');

            $table->integer('publisher_id')->unsigned()->nullable();
            $table->foreign('publisher_id')->references('id')
                ->on('publishers')->onDelete('cascade');

            $table->integer('cover_id')->unsigned()->nullable();
            $table->foreign('cover_id')->references('id')
                ->on('covers')->onDelete('cascade');

            $table->integer('language_id')->unsigned()->nullable();
            $table->foreign('language_id')->references('id')
                ->on('languages')->onDelete('cascade');

            $table->integer('price');
            $table->text('description');
            $table->boolean('featured')->default(false);
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
        Schema::dropIfExists('products');
    }
}
