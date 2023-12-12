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
    	if (! Schema::hasTable('pet_type')) {
	        Schema::create('pet_type', function (Blueprint $table) {
	            $table->id();
	            $table->unsignedInteger('pet_id');
	            $table->unsignedInteger('type_id');
	            $table->timestamps();
	        });
	    }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pet_type');
    }
};
