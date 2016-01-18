<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 64);
            $table->string('email', 64)->unique();
            $table->string('phone', 32);
            $table->string('gender', 10);
            $table->string('id_type', 32);
            $table->string('id_number', 32);
            $table->string('marital_status', 15);
            $table->string('address', 255);
            $table->string('photo', 64);
            $table->string('recommendation_letter', 64);
            $table->text('english_translation');
            $table->text('bangla_translation');
            $table->boolean('status')->default(false);
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
        Schema::drop('applicants');
    }
}
