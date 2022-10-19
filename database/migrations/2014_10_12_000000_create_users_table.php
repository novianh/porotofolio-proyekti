<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('options', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 30);
            $table->string('email', 30)->unique();
            $table->string('password', 64);
            $table->string('url', 50)->nullable();
            $table->text('message')->nullable();
            $table->string('image', 20)->nullable();
            $table->text('desc')->nullable();
            $table->string('title', 100)->nullable();
            $table->string('slug', 50)->nullable();
            $table->string('excerpts')->nullable();
            $table->text('content')->nullable();
            $table->tinyInteger('status')->nullable();
            $table->string('page', 10)->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('options');
    }
}
