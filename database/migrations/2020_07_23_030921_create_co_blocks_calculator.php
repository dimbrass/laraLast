<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoBlocksCalculator extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('co_calculator__useful-info-top', function (Blueprint $table) {
            $table->id();
            $table->integer('page_id')->default('1');
            $table->string('title')->nullable();
        });
        Schema::create('co_calculator__useful-info-item', function (Blueprint $table) {
            $table->id();
            $table->integer('page_id')->default('1');
            $table->string('title')->nullable();
            $table->text('paragraph')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('co_calculator__useful-info-top');
        Schema::dropIfExists('co_calculator__useful-info-item');
    }
}
