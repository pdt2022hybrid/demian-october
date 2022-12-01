<?php namespace Adam\Openlab\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateNodesTable extends Migration
{
    public function up()
    {
        Schema::create('adam_openlab_nodes', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('adam_openlab_nodes');
    }
}
