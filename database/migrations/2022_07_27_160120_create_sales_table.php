<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->string('jou_id');
            $table->string('salescall_id');
            $table->string('region');
            $table->string('branch_code');
            $table->foreignId('company_id')->constraint('companies')->onUpdate('cascade');
            $table->foreignId('category_id')->constraint('categories')->onUpdate('cascade');
            $table->string('ter_id');
            $table->foreignId('pos_id')->constraint('pos')->onUpdate('cascade');
            $table->string('temp');
            $table->foreignId('salesrep_id')->constraint('salesreps')->onUpdate('cascade');
            $table->foreignId('salester_id')->constraint('salesters')->onUpdate('cascade');
            $table->foreignId('route_id')->constraint('routes')->onUpdate('cascade');
            $table->string('day');
            $table->string('visit_start_time');
            $table->string('visit_end_time');
            $table->string('call_status_id');
            $table->foreignId('family_id')->constraint('families')->onUpdate('cascade');
            $table->foreignId('prod_id')->constraint('prods')->onUpdate('cascade');
            $table->string('sales_car');
            $table->string('stock');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sales');
    }
}
