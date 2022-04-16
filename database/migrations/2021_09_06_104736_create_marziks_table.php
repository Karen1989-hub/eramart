<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarziksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marziks', function (Blueprint $table) {
            $table->id();
            $table->string('performer')->nullable();
            $table->string('name');
            $table->string('lastName');
            $table->string('imgName')->nullable();
            $table->string('coacհName')->nullable();
            $table->string('weight');
            $table->string('weightClass');
            $table->string('v1_1m')->nullable();
            $table->string('v1_2m')->nullable();
            $table->string('v1_3m')->nullable();
            $table->string('v1_summ')->nullable();
            $table->string('v1_record')->nullable();
            $table->string('v2_1m')->nullable();
            $table->string('v2_2m')->nullable();
            $table->string('v2_3m')->nullable();
            $table->string('v2_summ')->nullable();
            $table->string('v2_record')->nullable();
            $table->string('v3_1m')->nullable();
            $table->string('v3_2m')->nullable();
            $table->string('v3_3m')->nullable();
            $table->string('v3_summ')->nullable();
            $table->string('v3_record')->nullable();
            $table->string('v4_1m')->nullable();
            $table->string('v4_2m')->nullable();
            $table->string('v4_3m')->nullable();
            $table->string('v4_summ')->nullable();
            $table->string('v4_record')->nullable();
            $table->string('v5_1m')->nullable();
            $table->string('v5_2m')->nullable();
            $table->string('v5_3m')->nullable();
            $table->string('v5_summ')->nullable();
            $table->string('v5_record')->nullable();
            $table->string('summ')->nullable();

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
        Schema::dropIfExists('marziks');
    }
}
