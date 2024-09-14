<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuotationMasterTable extends Migration
{
    public function up()
    {
        Schema::create('quotation_master', function (Blueprint $table) {
            $table->id();
            $table->string('quotation_no');
            $table->date('date');
            $table->string('reference_name');
            $table->unsignedBigInteger('expert_id');
            $table->foreign('expert_id')->references('Expertmaster_IDP')->on('tbl_expertmaster');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('quotation_master');
    }
}
