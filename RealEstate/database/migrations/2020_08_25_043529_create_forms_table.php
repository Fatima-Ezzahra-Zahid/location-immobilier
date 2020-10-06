<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forms', function (Blueprint $table) {
        $table->increments('id_f');
        $table->unsignedBigInteger('user_id');
        $table->string('full_name');
        $table->string('address');
        $table->string('email');
        $table->string('Phone_Number');
        $table->integer('types_id');
        $table->string('cities_name');
        $table->string('autre')->nullable();
        $table->float('price');
        $table->string('District');
        $table->float('area');
        $table->integer('number_r')->nullable();
        $table->integer('floor_n')->nullable();
        $table->string('title');
        $table->string('descr');
        $table->boolean('actived')->default(0)->change();
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
        Schema::dropIfExists('forms');
    }
}
