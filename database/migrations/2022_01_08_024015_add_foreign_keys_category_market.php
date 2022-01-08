<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysCategoryMarket extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('category_market', function (Blueprint $table) {
            $table->foreign('product_id', 'fk_category_market_to_product')->references('id')->on('product')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('category_market', function (Blueprint $table) {
            $table->dropforeign('fk_category_market_to_product');
        });
    }
}
