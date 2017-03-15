<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /* posts table */
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstname');
            $table->string('middlename')->default(NULL);
            $table->string('lastname');
            $table->string('gender');
            $table->string('address_line1');
            $table->string('address_line2');
            $table->string('address_line3');
            $table->integer('postcode');
            $table->string('ec_person');
            $table->string('ec_relationship');
            $table->integer('ec_phone_number');
            $table->text('longterm_goal');
            $table->timestamps();
            $table->index('id');
            $table->index('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
