<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('account_orders', function (Blueprint $table) {
//            $table->increments('id');
//            $table->decimal('price');
//            $table->decimal('pre_price');
//            $table->decimal('after_price');
//            $table->string('order_no');
//            $table->text('mark');
//            $table->string('user_name');
//            $table->integer('uid');
//            $table->string('account_type');
//            $table->integer('account_id');
//            $table->integer('opt_id');
//            $table->tinyInteger('st');
//            $table->tinyInteger('ac_type');
//            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('account_orders');
    }
}
