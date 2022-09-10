<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usrs', function (Blueprint $table) {
            $table->id();
            $table->string('user_name',45);
            $table->string('user_lastname',45);
            $table->string('user_email',45);
            $table->string('user_password',45);
            $table->boolean('user_actived')->default(1);
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
