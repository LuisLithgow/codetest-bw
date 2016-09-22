<?php

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
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fname');
            $table->string('lname');
            $table->string('address');
            $table->string('address2');
            $table->string('city');
            $table->string('state');
            $table->integer('zipcode');
            $table->integer('phone');
            $table->string('email')->unique();
            $table->string('company_info');
            $table->string('company_name');
            $table->string('company_address');
            $table->string('company_city');
            $table->string('company_state');
            $table->integer('company_zipcode');
            $table->integer('company_phone');
            $table->TEXT('pdf_file');
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
        Schema::drop('posts');
    }
}
