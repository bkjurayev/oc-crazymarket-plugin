<?php

namespace Crazy\Market\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

/**
 * CreateProductsTable Migration
 */
class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('crazy_market_products', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('is_active')->defaoult(0);
            $table->integer('brand_id');
            $table->string('name')->nullable();
            $table->string('slug')->unique();
            $table->text('excerpt')->nullable();
            $table->text('description');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('crazy_market_products');
    }
}
