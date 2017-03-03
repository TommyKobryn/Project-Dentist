<?php namespace Tomas\About\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateTestimonialsTable extends Migration
{
    public function up()
    {
        Schema::create('tomas_about_testimonials', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->text('content');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tomas_about_testimonials');
    }
}
