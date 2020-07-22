<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoBlocksUserAgreement extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('co_user-agreement__page-title', function (Blueprint $table) {
            $table->id();
            $table->integer('page_id')->default('1');
            $table->string('title')->nullable();
            $table->string('date')->nullable();
        });
        Schema::create('co_user-agreement__text-block', function (Blueprint $table) {
            $table->id();
            $table->integer('page_id')->default('1');
            $table->string('title')->nullable();
            $table->text('text1')->nullable();
            $table->text('text2')->nullable();
            $table->text('text3')->nullable();
            $table->text('list1')->nullable();
            $table->text('list2')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('co_user-agreement__page-title');
        Schema::dropIfExists('co_user-agreement__text-block');
    }
}
