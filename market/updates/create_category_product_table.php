<?php

namespace Crazy\Market\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

/**
 * CreateCategoryProductTable Migration
 */
class CreateCategoryProductTable extends Migration
{
    public function up()
    {
        Schema::create('crazy_market_category_product', function (Blueprint $table) {
            $table->integer('product_id');
            $table->integer('category_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('crazy_market_category_product');
    }
}
