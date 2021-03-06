<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegisteredsTable extends Migration
{
    public function up()
    {
        Schema::create('registereds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code');
            $table->string('fname')->nullable();
            $table->string('idnumber')->nullable();
            $table->string('branch')->nullable();
            $table->string('phone')->nullable();
            $table->integer('age')->nullable();
            $table->string('country')->nullable();
            $table->string('branch_code')->nullable();
            $table->date('joined_date')->nullable();
            $table->string('have_account')->nullable();
            $table->string('gender')->nullable();
            $table->timestamps();
        });
    }
}
