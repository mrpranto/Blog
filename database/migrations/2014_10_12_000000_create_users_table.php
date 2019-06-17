<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->tinyInteger('role_id')->default(3);
            $table->string('name',128);
            $table->string('email',128)->unique();
            $table->date('email_verified_at')->nullable();
            $table->string('email_verification_token',128)->nullable();
            $table->string('password',128 );
            $table->string('facebook_id',128 )->nullable();
            $table->string('google_id',128 )->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
