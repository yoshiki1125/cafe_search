<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cafes', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50)->nullable(false);
            $table->string ('address', 50)->nullable(false);
            $table->double('lat', 8,6)->nullable(false);
            $table->double('lng', 9,6)->nullable(false);
            $table->string('access', 50)->nullable(false);
            $table->string('tell', 13);
            $table->string('open_hours', 15);
            $table->string('regular_holiday', 15);
            $table->boolean('wifi')->default(0);
            $table->boolean('outlet')->default(0);
            $table->boolean('working_space')->default(0);
            $table->boolean('smorking_space')->default(0);
            $table->boolean('paper_cigarette')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cafes');
    }
};
