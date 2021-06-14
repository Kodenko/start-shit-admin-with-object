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
        Schema::create('users', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('link')->nullable();
            $table->string('years')->nullable();
            $table->integer('currency_id')->unsigned()->nullable();
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->string('instagram')->nullable();
            $table->string('facebook')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('twitter')->nullable();
            $table->string('telegram')->nullable();
            $table->string('password')->nullable();

            $table->text('description')->nullable();
            $table->text('content')->nullable();
            $table->float('latitude')->nullable();
            $table->float('longitude')->nullable();

            $table->integer('user_type_id')->unsigned();
            $table->integer('locale_id')->unsigned();

            $table->float('revenue')->nullable();

            $table->rememberToken();
            $table->timestamp('email_verified_at')->nullable();
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
        Schema::dropIfExists('users');
    }
}
