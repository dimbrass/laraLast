<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentAllPages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('content__test__page__', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('title')->nullable();
        });
        Schema::create('content__page__page__', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('title')->nullable();
        });
        Schema::create('content__home__page__', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('title')->nullable();
        });
        Schema::create('content__Osago__page__', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('title')->nullable();
        });
        Schema::create('content__Tech-inspection__page__', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('title')->nullable();
        });
        Schema::create('content__Tech-inspection-item__page__', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('title')->nullable();
        });
        Schema::create('content__Kbm-check__page__', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('title')->nullable();
        });
        Schema::create('content__Kbm-restore__page__', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('title')->nullable();
        });
        Schema::create('content__Mulct-check__page__', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('title')->nullable();
        });
        Schema::create('content__Policy-check__page__', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('title')->nullable();
        });
        Schema::create('content__User-agreement__page__', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('title')->nullable();
        });
        Schema::create('content__Site-map__page__', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('title')->nullable();
        });
        Schema::create('content__Our-offices__page__', function (Blueprint $table) {
            $table->id();
            $table->string('name');
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
        Schema::dropIfExists('content__page__page__');
        Schema::dropIfExists('content__home__page__');
        Schema::dropIfExists('content__Osago__page__');
        Schema::dropIfExists('content__Tech-inspection__page__');
        Schema::dropIfExists('content__Tech-inspection-item__page__');
        Schema::dropIfExists('content__Kbm-check__page__');
        Schema::dropIfExists('content__Kbm-restore__page__');
        Schema::dropIfExists('content__Mulct-check__page__');
        Schema::dropIfExists('content__Policy-check__page__');
        Schema::dropIfExists('content__User-agreement__page__');
        Schema::dropIfExists('content__Site-map__page__');
        Schema::dropIfExists('content__Our-offices__page__');
    }
}
