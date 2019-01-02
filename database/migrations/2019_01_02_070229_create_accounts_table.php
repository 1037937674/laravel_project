<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
//            $table->increments('id');
//            $table->tinyInteger('status');
//            $table->string('account_no',20);
//            $table->string('account_name',50);
//            $table->tinyInteger('type');
//            $table->integer('uid');
//            $table->string('user_name');
//            $table->decimal('amount');
//            $table->text('mark');
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
        Schema::dropIfExists('accounts');
    }
}
