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
        Schema::create('content__home_topslider', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
        });
        Schema::create('content__home_insurance', function (Blueprint $table) {
            $table->id();
            $table->string('link')->nullable();
        });
        Schema::create('content__home_our-servises-title', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
        });
        Schema::create('content__home_our-servises', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('link')->nullable();
        });
        Schema::create('content__home_autowish-about', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->text('paragraph1')->nullable();
            $table->text('paragraph2')->nullable();
        });
        Schema::create('content__home_autowish-benefits', function (Blueprint $table) {
            $table->id();
            $table->string('bold')->nullable();
            $table->text('text')->nullable();
        });
        Schema::create('content__home_autowish-servises-title', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
        });
        Schema::create('content__home_autowish-servises', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('link')->nullable();
        });
        Schema::create('content__home_smart-search', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('examples')->nullable();
        });
        Schema::create('content__home_soc-media', function (Blueprint $table) {
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
        Schema::dropIfExists('content__home_topslider');
        Schema::dropIfExists('content__home_insurance');
        Schema::dropIfExists('content__home_our-servises-title');
        Schema::dropIfExists('content__home_our-servises');
        Schema::dropIfExists('content__home_autowish-about');
        Schema::dropIfExists('content__home_autowish-benefits');
        Schema::dropIfExists('content__home_autowish-servises-title');
        Schema::dropIfExists('content__home_autowish-servises');
        Schema::dropIfExists('content__home_smart-search');
        Schema::dropIfExists('content__home_soc-media');
    }
}
