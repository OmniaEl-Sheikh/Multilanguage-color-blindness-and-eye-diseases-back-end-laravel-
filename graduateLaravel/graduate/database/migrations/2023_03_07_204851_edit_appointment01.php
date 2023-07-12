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
        Schema::table('Appointments', function (Blueprint $table) {
            $table->timestamp('date');

            $table->primary(['uid', 'date']);   //composite paimary key

            $table->string('report');
            $table->date('nextAppointmentDate')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('Appointments', function (Blueprint $table) {
            //
        });
    }
};
