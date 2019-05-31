<?php namespace Al3xTig3r\BlogUtils\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateProposalsTable extends Migration
{
    public function up()
    {
        Schema::create('al3xtig3r_blogutils_proposals', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 64)->nullable();
            $table->string('email', 128)->nullable();
            $table->string('proposal', 1024);
            $table->boolean('used')->default(false);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('al3xtig3r_blogutils_proposals');
    }
}
