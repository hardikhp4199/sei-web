<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblSubserviceTable extends Migration
{
    public function up()
    {
        Schema::dropIfExists('tbl_subservice');

        Schema::create('tbl_subservice', function (Blueprint $table) {
            $table->bigIncrements('SubService_IDP');
           $table->unsignedBigInteger('ServiceM_IDF');
            $table->string('SubService_Name');
            $table->text('Details')->nullable();
            $table->boolean('Status')->default(true);
            $table->timestamp('TimeStamp')->useCurrent();
            $table->timestamp('UpdateTimeStamp')->useCurrent();
            $table->string('CreatedBy')->nullable();
            $table->timestamp('CreatedDate')->nullable();
            $table->string('Modify')->nullable();
            $table->timestamp('ModifyDate')->nullable();

            $table->foreign('ServiceM_IDF')->references('ServiceMasterIDP')->on('tbservicemaster')->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tbl_subservice');
    }
}
