<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fields', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->date('date');
            $table->dateTime('start', 0);
            $table->dateTime('end', 0);
            $table->string('color')->nullable();
            $table->string('hour')->nullable();
            $table->string('field_number');
            $table->foreignId('user_id')
                        ->references('id')
                        ->on('users')
                        ->nullable();
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
        Schema::dropIfExists('fields');
    }
}
