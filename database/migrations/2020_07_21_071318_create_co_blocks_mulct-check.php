<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoBlocksMulctCheck extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('co_mulct-check__mulct-gbdd', function (Blueprint $table) {
            $table->id();
            $table->integer('page_id')->default('1');
            $table->text('text')->nullable();
        });
        Schema::create('co_mulct-check__deny-mulct', function (Blueprint $table) {
            $table->id();
            $table->integer('page_id')->default('1');
            $table->text('text')->nullable();
            $table->string('link_title')->nullable();
            $table->string('link')->nullable();
            $table->string('warning')->nullable();
        });
        Schema::create('co_mulct-check__paid-mulct', function (Blueprint $table) {
            $table->id();
            $table->integer('page_id')->default('1');
            $table->string('title')->nullable();
            $table->text('text')->nullable();
        });
        Schema::create('co_mulct-check__useful', function (Blueprint $table) {
            $table->id();
            $table->integer('page_id')->default('1');
            $table->string('title')->nullable();
        });
        Schema::create('co_mulct-check__check-by-license', function (Blueprint $table) {
            $table->id();
            $table->integer('page_id')->default('1');
            $table->string('title')->nullable();
            $table->text('paragraph1')->nullable();
            $table->text('paragraph2')->nullable();
        });
        Schema::create('co_mulct-check__mulct-item', function (Blueprint $table) {
            $table->id();
            $table->integer('page_id')->default('1');
            $table->string('title')->nullable();
            $table->text('text')->nullable();
            $table->string('link_title')->nullable();
            $table->string('link')->nullable();
        });
        Schema::create('co_mulct-check__mulcts-to-pay', function (Blueprint $table) {
            $table->id();
            $table->integer('page_id')->default('1');
            $table->string('bold')->nullable();
            $table->text('text')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('co_mulct-check__mulct-gbdd');
        Schema::dropIfExists('co_mulct-check__deny-mulct');
        Schema::dropIfExists('co_mulct-check__paid-mulct');
        Schema::dropIfExists('co_mulct-check__useful');
        Schema::dropIfExists('co_mulct-check__check-by-license');
        Schema::dropIfExists('co_mulct-check__mulct-item');
        Schema::dropIfExists('co_mulct-check__mulcts-to-pay');
    }
}
