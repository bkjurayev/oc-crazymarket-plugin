<?php

namespace Crazy\Market\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

/**
 * CreateCategoriesTable Migration
 */
class CreateCategoriesTable extends Migration
{
    public function up()
    {
        Schema::create('crazy_market_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('slug');
            $table->boolean('is_active')->default(0);
            $table->text('excerpt');
            $table->text('description');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('crazy_market_categories');
    }
}
