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
        Schema::table('appointments', function (Blueprint $table) {
            
            $table->renameColumn('appointment_dates','appointment_date');
            $table->renameColumn('appointment_times',' appointment_time');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('appointments', function (Blueprint $table) {
            $table->renameColumn('appointment_dates','appointment_date');
            $table->renameColumn(' appointment_times',' appointment_time');
        });
    }
};
