<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSecondDropdownsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('second_dropdowns', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('first_dropdown_id');
            $table->foreign('first_dropdown_id')->references('id')->on('first_dropdowns')->onUpdate('cascade')->onDelete('cascade');
            $table->string('name')->unique();
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
        Schema::dropIfExists('second_dropdowns');
    }
}
