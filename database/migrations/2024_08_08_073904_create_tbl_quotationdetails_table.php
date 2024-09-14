<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblQuotationdetailsTable extends Migration
{
    public function up()
    {
        Schema::create('tbl_quotationdetails', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('quotation_id');
            $table->unsignedBigInteger('service_id');
            $table->unsignedBigInteger('subservice_id')->nullable();
            $table->text('activities')->nullable();
            $table->integer('qty')->nullable();
            $table->decimal('amount', 10, 2)->nullable();
            $table->decimal('rate', 10, 2)->nullable();
            $table->decimal('gst', 5, 2)->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();

            $table->foreign('quotation_id')->references('id')->on('tbl_quotationmaster')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('tbl_quotationdetails');
    }
}