<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
<<<<<<< HEAD
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->Integer('product_id');
            $table->string('occasion')->nullable();
            $table->string('other_occasion')->nullable();
            $table->string('size')->nullable();
            $table->string('other_size')->nullable();
            $table->string('color')->nullable();
            $table->string('flavour')->nullable();
            $table->string('other_flavour')->nullable();
            $table->string('filling')->nullable();
            $table->string('other_filling')->nullable();
=======
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned();
            $table->Integer('product_id');
            $table->string('occasion')->nullable();
            $table->string('others')->nullable();
            $table->string('size')->nullable();
            $table->string('color')->nullable();
>>>>>>> 77078cc7ac9e761d2a0be84f29240d41d2685202
            $table->string('collection_date',10)->nullable();
            $table->string('collection_type')->nullable();
            $table->text('comment')->nullable();
            $table->boolean('status');
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
        Schema::dropIfExists('orders');
    }
}
