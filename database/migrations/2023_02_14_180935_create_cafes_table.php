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
            $table->string('access', 50)->nullable(false);
            $table->string('tell', 13);
            $table->string('open_hours', 15);
            $table->string('regular_holiday', 15);
            $table->string('wifi', 2);
            $table->string('outlet', 2);
            $table->string('working_space', 2);
            $table->string('smorking_space', 2);
            $table->string('paper_cigarette', 2);
            $table->string('image_url')->nullable();
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
