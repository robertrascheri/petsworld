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
        if (! Schema::hasTable('type_world')) {
	        Schema::create('type_world', function (Blueprint $table) {
	            $table->id();
	            $table->unsignedInteger('world_id');
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
        Schema::dropIfExists('type_world');
    }
};
