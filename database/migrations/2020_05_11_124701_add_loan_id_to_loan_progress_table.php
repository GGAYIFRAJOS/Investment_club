<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLoanIdToLoanProgressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('loan_progress', function (Blueprint $table) {
            
            $table->unsignedBigInteger('loan_id')->unsigned()->after('user_id');

            $table->foreign('loan_id')->references('id')->on('loans')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('loan_progress', function (Blueprint $table) {
            
            $table->dropForeign('loan_id');
            
            $table->dropColumn('loan_id');
        });
    }
}
