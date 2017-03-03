<?php namespace Atomiccode\Contact\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateOpenhoursTable extends Migration
{
    public function up()
    {
        Schema::create('atomiccode_contact_openhours', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->json('hours')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('atomiccode_contact_openhours');
    }
}
