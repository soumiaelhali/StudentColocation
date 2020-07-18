<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDemandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demands', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->double('max_price');
        $table->string('telephone')->nullable();
        $table->string('imgPath')->nullable();
        $table->text('description');
        $table->integer('capacity');
        $table->string('city')->nullable();
        $table->string('adresse')->nullable();
        $table->double('area');
        $table->unsignedBigInteger('user_id');
        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('demands');
    }
}
