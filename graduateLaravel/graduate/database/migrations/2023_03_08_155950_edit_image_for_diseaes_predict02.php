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
        Schema::table('image_for_disease_predictions', function (Blueprint $table) {
            $table->string('leftEyeImagePath');
            $table->string('rightEyeImagePath');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('image_for_disease_predictions', function (Blueprint $table) {
            //
        });
    }
};
