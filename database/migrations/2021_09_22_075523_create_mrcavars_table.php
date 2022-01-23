<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMrcavarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mrcavars', function (Blueprint $table) {
            $table->id();
            $table->string("mr1id")->nullable();
            $table->string("mr1v1")->nullable();
            $table->string("mr1v2")->nullable();
            $table->string("mr1v3")->nullable();
            $table->string("mr1v4")->nullable();
            $table->string("mr2id")->nullable();
            $table->string("mr2v1")->nullable();
            $table->string("mr2v2")->nullable();
            $table->string("mr2v3")->nullable();
            $table->string("mr2v4")->nullable();
            $table->string("mr3id")->nullable();
            $table->string("mr3v1")->nullable();
            $table->string("mr3v2")->nullable();
            $table->string("mr3v3")->nullable();
            $table->string("mr3v4")->nullable();

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
        Schema::dropIfExists('mrcavars');
    }
}
