<?php namespace Adam\Prichody\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateArrivalsTable extends Migration
{
    public function up()
    {
        Schema::create('adam_prichody_arrivals', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
            $table->string('name');
            // $table->date('date');
        });
    }

    public function down()
    {
        Schema::dropIfExists('adam_prichody_arrivals');
    }
}
