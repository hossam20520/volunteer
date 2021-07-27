<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOthersTable extends Migration
{
    public function up()
    {
        Schema::create('others', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('email')->nullable();
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('username')->unique();
            $table->string('company')->nullable();
            $table->string('job')->nullable();
            $table->string('eq');
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('password')->nullable();
            $table->string('phone')->nullable();
            $table->integer('age')->nullable();
            $table->boolean('accept_terms')->default(0)->nullable();
            $table->string('idpassport')->nullable();
            $table->string('fullname')->nullable();
            $table->string('gender')->nullable();
            $table->string('nationality')->nullable();
            $table->timestamps();
        });
    }
}
