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
        if (! Schema::hasTable('pets')) {
            Schema::create('pets', function (Blueprint $table) {
                $table->id();
                $table->string("name", 150);
                $table->text("history")->max(400)->nullable();
                $table->string("show_pet", 400)->nullable();
                $table->string("pet_url", 400)->nullable();
                $table->unsignedInteger("type_id")->nullable();
                $table->timestamps();

                

            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pets');
    }
};
