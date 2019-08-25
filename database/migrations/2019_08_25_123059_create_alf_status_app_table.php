<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlfStatusAppTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alf_status_app', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('status_app')->nullable();
            $table->string('status')->nullable();
            $table->dateTime('created_by')->nullable();
            $table->dateTime('update_by')->nullable();
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
        Schema::dropIfExists('alf_status_app');
    }
}
