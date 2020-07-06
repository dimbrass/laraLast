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
        Schema::create('co_all-pages__home', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('title')->nullable();
        });
        Schema::create('co_all-pages__Osago', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('title')->nullable();
        });
        Schema::create('co_all-pages__Tech-inspection', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('title')->nullable();
        });
        Schema::create('co_all-pages__Tech-inspection-item', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('title')->nullable();
        });
        Schema::create('co_all-pages__Kbm-check', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('title')->nullable();
        });
        Schema::create('co_all-pages__Kbm-restore', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('title')->nullable();
        });
        Schema::create('co_all-pages__Kbm-restore-result', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('title')->nullable();
        });
        Schema::create('co_all-pages__Mulct-check', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('title')->nullable();
        });
        Schema::create('co_all-pages__Policy-check', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('title')->nullable();
        });
        Schema::create('co_all-pages__User-agreement', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('title')->nullable();
        });
        Schema::create('co_all-pages__Site-map', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('title')->nullable();
        });
        Schema::create('co_all-pages__Our-offices', function (Blueprint $table) {
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
        Schema::dropIfExists('co_all-pages__test');
        Schema::dropIfExists('co_all-pages__page');
        Schema::dropIfExists('co_all-pages__home');
        Schema::dropIfExists('co_all-pages__Osago');
        Schema::dropIfExists('co_all-pages__Tech-inspection');
        Schema::dropIfExists('co_all-pages__Tech-inspection-item');
        Schema::dropIfExists('co_all-pages__Kbm-check');
        Schema::dropIfExists('co_all-pages__Kbm-restore');
        Schema::dropIfExists('co_all-pages__Mulct-check');
        Schema::dropIfExists('co_all-pages__Policy-check');
        Schema::dropIfExists('co_all-pages__User-agreement');
        Schema::dropIfExists('co_all-pages__Site-map');
        Schema::dropIfExists('co_all-pages__Our-offices');
    }
}
