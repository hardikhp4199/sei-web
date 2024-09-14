<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbservicemasterTable extends Migration
{
    public function up()
{
    Schema::create('tbservicemaster', function (Blueprint $table) {
        $table->bigIncrements('ServiceMasterIDP');
        $table->integer('AdminIDF')->nullable();
        $table->string('ServiceName', 500)->nullable();
        $table->longText('ServiceDetails')->nullable();
        $table->integer('Status')->nullable();
        $table->timestamps(); // This will add 'created_at' and 'updated_at' columns
        $table->datetime('ModifyDate')->nullable();
        // Add other columns as needed
    });
}


    public function down()
    {
        Schema::dropIfExists('tbservicemaster');
    }
}
