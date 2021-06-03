<?php

namespace Crazy\Market\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

/**
 * CreateBrandsTable Migration
 */
class CreateBrandsTable extends Migration
{
    public function up()
    {
        Schema::create('crazy_market_brands', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('is_active');
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('excerpt');
            $table->text('description');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('crazy_market_brands');
    }
}
