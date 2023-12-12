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
        if (! Schema::hasTable('types')) {
            Schema::create('types', function (Blueprint $table) {
                $table->id();
                $table->string("name", 150);
                $table->text("history")->max(400);
                $table->unsignedInteger("strength_type_id");
                $table->unsignedInteger("weakness_type_id");
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('types');
    }
};
