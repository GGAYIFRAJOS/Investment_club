<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoanProgressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loan_progress', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id')->unsigned();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->unsignedBigInteger('loan_range_id')->unsigned();

            $table->foreign('loan_range_id')->references('id')->on('loan_range')->onDelete('cascade');

            $table->integer('amount_forward');

            $table->integer('fine');

            $table->integer('interest');

            $table->integer('amount_paid');

            $table->integer('balance');

            $table->integer('total_owed');

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
        Schema::dropIfExists('loan_progress');
    }
}
