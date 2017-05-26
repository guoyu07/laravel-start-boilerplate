<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTMember extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('T_Member', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('tel');
            $table->string('email');
            $table->string('password');
            $table->string('remember_token');
            $table->string('role');
            $table->foreign('role')->references('name')->on('T_Role');
            $table->integer('status')->nullable(false);
            $table->unsignedInteger('created_by')->nullable();
            $table->foreign('created_by')->references('ID')->on('T_Member');
            $table->unsignedInteger('updated_by')->nullable();
            $table->foreign('updated_by')->references('ID')->on('T_Member');
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
        //
    }
}
