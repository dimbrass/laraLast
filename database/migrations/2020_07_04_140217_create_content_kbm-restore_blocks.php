<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentKbmRestoreBlocks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('co_kbm-restore__how-to-restore', function (Blueprint $table) {
            $table->id();
            $table->integer('page_id');
            $table->string('title')->nullable();
            $table->text('top')->nullable();
            $table->string('title-2')->nullable();
            $table->string('item-1')->nullable();
            $table->string('item-2')->nullable();
            $table->string('item-3')->nullable();
            $table->text('paragraph1')->nullable();
            $table->text('paragraph2')->nullable();
            $table->text('bold-paragraph')->nullable();
        });
        Schema::create('co_kbm-restore__restore-by-sb', function (Blueprint $table) {
            $table->id();
            $table->integer('page_id');
            $table->string('title')->nullable();
        });
        Schema::create('co_kbm-restore__restore-by-insurance', function (Blueprint $table) {
            $table->id();
            $table->integer('page_id');
            $table->string('title')->nullable();
        });
        Schema::create('co_kbm-restore__restore-by-broker', function (Blueprint $table) {
            $table->id();
            $table->integer('page_id');
            $table->string('title')->nullable();
        });
        Schema::create('co_kbm-restore__restore-by-rsa', function (Blueprint $table) {
            $table->id();
            $table->integer('page_id');
            $table->string('title')->nullable();
        });
        Schema::create('co_kbm-restore__restore-quick', function (Blueprint $table) {
            $table->id();
            $table->integer('page_id');
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
        Schema::dropIfExists('co_kbm-restore__how-to-restore');
        Schema::dropIfExists('co_kbm-restore__restore-by-sb');
        Schema::dropIfExists('co_kbm-restore__restore-by-insurance');
        Schema::dropIfExists('co_kbm-restore__restore-by-broker');
        Schema::dropIfExists('co_kbm-restore__restore-by-rsa');
        Schema::dropIfExists('co_kbm-restore__restore-quick');
    }
}
