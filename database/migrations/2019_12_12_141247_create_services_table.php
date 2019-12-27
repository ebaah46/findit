<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('location')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->string('type')->nullable();
            $table->string('price')->nullable();
            $table->string('phone')->nullable();
            $table->string('picture')->nullable();
            $table->string('experience')->nullable();
            $table->string('no_of_clients')->nullable();
            $table->text('service_description')->nullable();
            $table->string('service_availability')->nullable();
            $table->string('business_name')->nullable();
            $table->string('website')->nullable();
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->text('business_description')->nullable();
            $table->string('tin_no')->nullable();
            $table->string('registration_status')->nullable();
            $table->text('social_media')->nullable();
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
        Schema::dropIfExists('services');
    }
}
