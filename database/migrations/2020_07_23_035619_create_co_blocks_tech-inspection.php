<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoBlocksTechInspection extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('co_tech-inspection__top', function (Blueprint $table) {
            $table->id();
            $table->integer('page_id')->default('1');
            $table->string('title')->nullable();
        });
        Schema::create('co_tech-inspection__order', function (Blueprint $table) {
            $table->id();
            $table->integer('page_id')->default('1');
            $table->string('title')->nullable();
            $table->text('paragraph')->nullable();
        }); 
        // В каждом блоке потенциально есть все типы полей которые могут встретиться
        // если в поле разношерстные данные -- пиши туда json
        Schema::create('co_tech-inspection__order-item', function (Blueprint $table) {
            $table->id();

            $table->integer('page_id')->default('1');

            $table->string('title')->nullable();
            
            $table->string('link')->nullable();

            $table->text('paragraph1')->nullable();
            $table->text('paragraph2')->nullable();
            $table->text('paragraph3')->nullable();
            $table->text('paragraph4')->nullable();
            $table->text('paragraph5')->nullable();
            $table->text('paragraph6')->nullable();

            $table->string('list1_title')->nullable();
            $table->string('list1')->nullable();
            $table->string('list2_title')->nullable();
            $table->text('list2')->nullable();

            $table->text('table')->nullable();
        });
    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('co_tech-inspection__top');
        Schema::dropIfExists('co_tech-inspection__order');
        Schema::dropIfExists('co_tech-inspection__order-item');
    }
}
