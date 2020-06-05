<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmploymenthistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employmenthistory', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('SDate');
            $table->string('EDate');
            $table->string('Company');
            $table->string('Occ');
            $table->string('Details');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employmenthistory');
    }
}
