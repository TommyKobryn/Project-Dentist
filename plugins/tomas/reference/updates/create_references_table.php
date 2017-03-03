<?php namespace Tomas\Reference\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateReferencesTable extends Migration
{
    public function up()
    {
        Schema::create('tomas_reference_references', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tomas_reference_references');
    }
}
