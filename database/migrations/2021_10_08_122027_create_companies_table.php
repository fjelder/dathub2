<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('short_name', 20);
            $table->string('full_name');
            $table->string('street')->nullable();
            $table->string('city')->nullable();;
            $table->string('post_code', 6)->nullable();
            $table->string('country');
            $table->string('phone1', 15)->unique()->nullable();
            $table->string('phone2', 15)->unique()->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('nip')->unique()->nullable();
            $table->string('regon')->unique()->nullable();
            $table->string('krs')->unique()->nullable();
            $table->mediumText('description')->nullable();
            $table->unsignedBigInteger('created_by_user')->nullable();
            $table->foreign('created_by_user')->references('id')->on('users');
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
        Schema::dropIfExists('companies');
    }
}
