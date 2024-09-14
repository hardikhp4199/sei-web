<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblQuotationmasterTable extends Migration
{
    public function up()
    {
        Schema::create('tbl_quotationmaster', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('quotation_no')->unique();
            $table->date('date');
            $table->string('reference_name');
            $table->unsignedBigInteger('expert_id');
            $table->unsignedBigInteger('customer_id')->nullable();
            $table->decimal('total_amount', 10, 2)->nullable();
            $table->decimal('GST', 5, 2)->nullable();
            $table->decimal('discount', 5, 2)->nullable();
            $table->text('notes')->nullable();
            $table->string('status')->nullable();
            $table->string('quotation_title')->nullable();
            $table->text('quotation_details')->nullable();
            $table->string('customer_name')->nullable();
            $table->string('time_zone')->nullable();
            $table->decimal('commission_percentage', 5, 2)->nullable();
            $table->text('terms_conditions')->nullable();
            $table->date('valid_until')->nullable();
            $table->string('customer_reference')->nullable();
            $table->decimal('sub_total', 10, 2)->nullable();
            $table->string('rupees_in_word')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tbl_quotationmaster');
    }
}
