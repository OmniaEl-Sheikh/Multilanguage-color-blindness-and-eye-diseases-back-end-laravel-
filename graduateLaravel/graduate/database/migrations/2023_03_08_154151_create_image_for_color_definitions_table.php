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
        Schema::create('image_for_color_definitions', function (Blueprint $table) {
            $table->unsignedBigInteger('uid');
            $table->foreign('uid')->references('id')->on('users')->onDelete('cascade');
            
            $table->timestamp('date');

            $table->primary(['uid', 'date']);   //composite paimary key

            $table->string('imagePath');
            $table->string('colorName');
            $table->string('degree');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('image_for_color_definitions');
    }
};
