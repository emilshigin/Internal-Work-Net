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
        Schema::create('product_history', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('event_type');

            $table->foreignId('product_unit_id')->constrained()->onDelete('restrict');
            $table->foreignId('from_office_id')->nullable()->constrained('office')->onDelete('set null');
            $table->foreignId('to_office_id')->nullable()->constrained('office')->onDelete('set null');

            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_history');
    }
};
