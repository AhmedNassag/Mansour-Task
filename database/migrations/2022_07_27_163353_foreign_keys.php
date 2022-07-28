<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sales',  function(Blueprint $table)
        {
            $table->foreign('company_id')
            ->references('id')
            ->on('companies')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });

        Schema::table('sales',  function(Blueprint $table)
        {
            $table->foreign('category_id')
            ->references('id')
            ->on('categories')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });

        Schema::table('sales',  function(Blueprint $table)
        {
            $table->foreign('pos_id')
            ->references('id')
            ->on('pos')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });

        Schema::table('sales',  function(Blueprint $table)
        {
            $table->foreign('salesrep_id')
            ->references('id')
            ->on('salesreps')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });

        Schema::table('sales',  function(Blueprint $table)
        {
            $table->foreign('salester_id')
            ->references('id')
            ->on('salesters')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });

        Schema::table('sales',  function(Blueprint $table)
        {
            $table->foreign('route_id')
            ->references('id')
            ->on('routes')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });

        Schema::table('sales',  function(Blueprint $table)
        {
            $table->foreign('family_id')
            ->references('id')
            ->on('families')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });

        Schema::table('sales',  function(Blueprint $table)
        {
            $table->foreign('prod_id')
            ->references('id')
            ->on('prods')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
