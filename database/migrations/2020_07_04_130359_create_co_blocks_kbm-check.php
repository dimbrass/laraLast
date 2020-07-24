<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoBlocksKbmCheck extends Migration
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
            $table->integer('page_id')->default('1');
            $table->string('title')->nullable();
            $table->text('top')->nullable();
            $table->text('paragraph1')->nullable();
            $table->text('paragraph2')->nullable();
            $table->text('paragraph3')->nullable();
            $table->text('bold_paragraph1')->nullable();
            $table->text('bold_paragraph2')->nullable();
        });
        Schema::create('co_kbm-check__whattodo-title', function (Blueprint $table) {
            $table->id();
            $table->integer('page_id')->default('1');
            $table->string('title')->nullable();
        });
        Schema::create('co_kbm-check__whattodo-item', function (Blueprint $table) {
            $table->id();
            $table->integer('page_id')->default('1');
            $table->string('title')->nullable();
            $table->string('link')->nullable();
        });
        Schema::create('co_kbm-check__table', function (Blueprint $table) {
            $table->id();
            $table->integer('page_id')->default('1');
            $table->text('row_head1')->nullable();
            $table->text('row_head2')->nullable();
            $table->text('row_data')->nullable();
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
        Schema::dropIfExists('co_kbm-check__whattodo-item');
        Schema::dropIfExists('co_kbm-check__table');
    }
}
