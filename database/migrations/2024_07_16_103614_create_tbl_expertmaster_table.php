<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblExpertmasterTable extends Migration
{
    public function up()
    {
        Schema::create('tbl_expertmaster', function (Blueprint $table) {
            $table->id('Expertmaster_IDP');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('phone')->unique();;
            $table->string('city');            
            $table->string('password')->nullable();
            $table->string('legal_name')->nullable();
            $table->string('pan_no')->nullable();
            $table->string('registered_address')->nullable();
            $table->string('country')->nullable();
            $table->string('licenses')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('account_name')->nullable();
            $table->string('ifsc_code')->nullable();
            $table->string('company_name')->nullable();
            $table->string('location_of_business')->nullable();
            $table->string('gst_no')->nullable();
            $table->string('nature_of_business')->nullable();
            $table->string('types_of_firm')->nullable();
            $table->year('year_of_incorporation')->nullable();
            $table->integer('no_of_employees')->nullable();
            $table->string('last_3_years_annual_turnover')->nullable();
            $table->string('service')->nullable();
            $table->string('subservice')->nullable();
            $table->string('activities')->nullable();
            $table->string('each_activity_with_qty_unit')->nullable();
            $table->string('estimate_time')->nullable();
            $table->string('INR_rate')->nullable();
            $table->string('international_rate')->nullable();
            $table->string('currency')->nullable();
            $table->string('rates')->nullable();
            $table->string('commission_amount')->nullable();
            $table->string('GST')->nullable();
            $table->string('TDS')->nullable();
            $table->string('status')->default('active');
            $table->string('created_by')->nullable();
            $table->timestamp('created_date')->useCurrent();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tbl_expertmaster');
    }
}
