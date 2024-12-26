<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('services', function (Blueprint $table) {
            $table->renameColumn('servie_discription','service_description');
            $table->dropColumn('serice03');
            $table->dropColumn('servie_discription01');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('services', function (Blueprint $table) {
            $table->renameColumn('servie_discription','service_description');
            $table->string('serice03')->nullable();
            $table->string('servie_discription01', 100)->nullable();
        });
    }
};
