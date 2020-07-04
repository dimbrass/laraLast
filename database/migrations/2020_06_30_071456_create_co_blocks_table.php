<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoBlocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('co_blocks', function (Blueprint $table) {
            $table->id();
            $table->boolean('top')->default(false);
            $table->integer('order_in_parent')->nullable();
            $table->integer('parent_id')->nullable();
            $table->string('title')->nullable();
            $table->longText('text')->nullable();
            $table->string('link')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('co_blocks');
    }
}
