<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuildingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buildings', function (Blueprint $table) {
            $table->id();

            $table->char('name',255)->nullable();
            $table->char('country',255)->nullable();
            $table->char('city',255)->nullable();
            $table->char('address',255)->nullable();

            $table->text('description')->nullable();
            $table->text('content')->nullable();

            $table->integer('roi')->nullable();
            $table->integer('price')->nullable();
            $table->integer('currency_id')->unsigned()->nullable();
            $table->integer('type_id')->unsigned()->nullable();
            $table->integer('deal_id')->unsigned()->nullable();
            $table->integer('locale_id')->unsigned()->nullable();

            $table->float('latitude')->nullable();
            $table->float('longitude')->nullable();

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
        Schema::dropIfExists('buildings');
    }
}
