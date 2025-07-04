<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('gebeurtenis', function (Blueprint $table) {
        $table->foreignId('location_id')->nullable()->constrained('locations')->nullOnDelete();
    });
}

public function down()
{
    Schema::table('gebeurtenis', function (Blueprint $table) {
        $table->dropForeign(['location_id']);
        $table->dropColumn('location_id');
    });
}
};
