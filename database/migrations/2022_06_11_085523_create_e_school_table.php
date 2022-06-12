<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateESchoolTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('e_school')) {
            Schema::create('e_school', function (Blueprint $table) {
                $table->id();
                $table->dateTime("date");
                $table->string('subject');
                $table->string('homework');
                $table->timestamps();

            });
        }

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('e_school');
    }
}