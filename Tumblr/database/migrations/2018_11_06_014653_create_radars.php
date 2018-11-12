<?php

//Author: Maria Lopez
//Date: 2018-11-08

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRadars extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('radars', function (Blueprint $table) {
            
            $table->increments('id');
            $table->string('radarBlogAvatar');
            $table->string('radarUserAlias');
            $table->string('radarBlogDesc');
            $table->string('radarBlogImg');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('radars');
    }
}
