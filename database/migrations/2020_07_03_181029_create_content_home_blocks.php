<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentHomeBlocks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('co_home__insurance', function (Blueprint $table) {
            $table->id();
            $table->integer('page_id')->default('1');
            $table->string('link')->nullable();
        });
        Schema::create('co_home__our-servises-title', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
        });
        Schema::create('co_home__our-servises', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('link')->nullable();
        });
        Schema::create('co_home__autowish-about', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->text('paragraph1')->nullable();
            $table->text('paragraph2')->nullable();
        });
        Schema::create('co_home__autowish-benefits', function (Blueprint $table) {
            $table->id();
            $table->string('bold')->nullable();
            $table->text('text')->nullable();
        });
        Schema::create('co_home__autowish-servises-title', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
        });
        Schema::create('co_home__autowish-servises', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('link')->nullable();
        });
        Schema::create('co_home__smart-search', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('examples')->nullable();
        });
        Schema::create('co_home__soc-media', function (Blueprint $table) {
            $table->id();
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
        Schema::dropIfExists('co_home__topslider');
        Schema::dropIfExists('co_home__insurance');
        Schema::dropIfExists('co_home__our-servises-title');
        Schema::dropIfExists('co_home__our-servises');
        Schema::dropIfExists('co_home__autowish-about');
        Schema::dropIfExists('co_home__autowish-benefits');
        Schema::dropIfExists('co_home__autowish-servises-title');
        Schema::dropIfExists('co_home__autowish-servises');
        Schema::dropIfExists('co_home__smart-search');
        Schema::dropIfExists('co_home__soc-media');
    }
}
