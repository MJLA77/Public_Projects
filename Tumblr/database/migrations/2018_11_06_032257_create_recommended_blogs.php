<?php
//Author: Maria Lopez
//Date: 2018-11-08

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecommendedBlogs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recommended_blogs', function (Blueprint $table) {

            $table->increments('id');
            $table->string('recblogimage');
            $table->string('recblogtitle');
            $table->string('recblogdesc');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recommended_blogs');
    }
}
