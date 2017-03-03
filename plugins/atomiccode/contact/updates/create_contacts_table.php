<?php namespace Atomiccode\Contact\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateContactsTable extends Migration
{
    public function up()
    {
        Schema::create('atomiccode_contact_contacts', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title')->nullable();
            $table->string('subtitle')->nullable();
            $table->text('address_city')->nullable();
            $table->text('address_code')->nullable();
            $table->text('address_street')->nullable();
            $table->text('address_number')->nullable();
            $table->boolean('map_type')->default(false);
            $table->string('mapX')->nullable();
            $table->string('mapY')->nullable();
            $table->text('map_link')->nullable();
            $table->string('facebook')->nullable();
            $table->string('google')->nullable();
            $table->json('phones')->jsonable();
            $table->json('emails')->jsonable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('atomiccode_contact_contacts');
    }
}
