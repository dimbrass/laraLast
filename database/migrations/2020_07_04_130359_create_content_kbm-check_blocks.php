<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentKbmCheckBlocks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('co_kbm-check__kbm-bonus-malus', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->text('top')->nullable();
            $table->text('paragraph1')->nullable();
            $table->text('paragraph2')->nullable();
            $table->text('paragraph3')->nullable();
            $table->text('bold-paragraph1')->nullable();
            $table->text('bold-paragraph2')->nullable();
        });
        Schema::create('co_kbm-check__whattodo-title', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
        });
        Schema::create('co_kbm-check__whattodo-item-1', function (Blueprint $table) {
            $table->id();
            $table->string('link')->nullable();
            $table->string('title')->nullable();
        });
        Schema::create('co_kbm-check__whattodo-item-2', function (Blueprint $table) {
            $table->id();
            $table->string('link')->nullable();
            $table->string('title')->nullable();
        });
        Schema::create('co_kbm-check__whattodo-item-3', function (Blueprint $table) {
            $table->id();
            $table->string('link')->nullable();
            $table->string('title')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('co_kbm-check__kbm-bonus-malus');
        Schema::dropIfExists('co_kbm-check__whattodo-title');
        Schema::dropIfExists('co_kbm-check__whattodo-item-1');
        Schema::dropIfExists('co_kbm-check__whattodo-item-2');
        Schema::dropIfExists('co_kbm-check__whattodo-item-3');
    }
}
