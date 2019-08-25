<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlfRoleAuthTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alf_role_auth', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name_auth')->nullable();
            $table->string('status')->nullable()->default('Y');
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
        Schema::dropIfExists('alf_role_auth');
    }
}
