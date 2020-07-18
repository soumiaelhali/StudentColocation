<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
        $table->id();
        $table->string('name')->nullable();

        $table->string('email');
        $table->string('username');
        $table->string('password');
        $table->string('facebook')->nullable();
        $table->string('public_email')->nullable();
        $table->string('phone')->nullable();
        $table->string('twitter')->nullable();
        $table->string('website')->nullable();
        $table->string('fax')->nullable();
        $table->string('imgPath')->nullable();
        $table->date('start_date')->nullable()->useCurrent();
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
        Schema::dropIfExists('clients');
    }
}
