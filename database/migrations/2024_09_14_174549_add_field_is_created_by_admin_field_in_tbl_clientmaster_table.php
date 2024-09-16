<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tbl_clientmaster', function (Blueprint $table) {
            $table->boolean('is_added_by_admin')->nullable()->after('Clientmaster_IDP');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_clientmaster', function (Blueprint $table) {
            $table->dropColumn('is_added_by_admin');
        });
    }
};
