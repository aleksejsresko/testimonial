<?php namespace BrandIt\Testimonial\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateItemTagTable extends Migration
{
    public function up()
    {
        Schema::create('brandit_testimonial_item_tag', function (Blueprint $table) {
            $table->integer('item_id')->unsigned();
            $table->integer('tag_id')->unsigned();
            $table->primary(['item_id', 'tag_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('randit_testimonial_item_tag');
    }
}
