<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('quote_test', function(Blueprint $table)
        {
             $table->increments('id')->unsigned();
            $table->string('code', 10);
             $table->text('description',200);
             $table->string('image',256)->nullable()->default('NULL');
             $table->string('type',10);
             
             
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
         Schema::drop('quote_test');
    }
}
