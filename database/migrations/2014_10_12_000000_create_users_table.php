<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->increments('id')->autoIncrement();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email');
            $table->string('gender')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->string('password');
            $table->string('id_number');

            $table->string('principal')->nullable();
            $table->string('months')->nullable();
            $table->string('use')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('village_estate')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->string('promo_code')->nullable();

            $table->integer('totalinterest')->nullable();
            $table->integer('deposit')->nullable();
            $table->integer('totalpayment')->nullable();
            $table->string('duedate')->nullable();
            $table->string('monthlypayment')->nullable();
            $table->string('loan_id')->nullable();
            $table->string('role')->default('user');

            
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
