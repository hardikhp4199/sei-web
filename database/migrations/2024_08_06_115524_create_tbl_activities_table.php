<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblActivitiesTable extends Migration
{
    public function up()
    {
        Schema::create('tbl_activities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('servicem_idf');
            $table->unsignedBigInteger('subservice_idf');
            $table->string('activity_name');
            $table->string('rate_type');
            $table->decimal('rate', 8, 2);
            $table->timestamps();

            $table->foreign('servicem_idf')->references('ServiceMasterIDP')->on('tbservicemaster')->onDelete('cascade');
            $table->foreign('subservice_idf')->references('SubService_IDP')->on('tbl_subservice')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('tbl_activities');
    }
}
