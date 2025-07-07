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
        Schema::create('contact_emails', function (Blueprint $table) {
            $table->id();
            $table->string('email'); 
            $table->string('name'); // name for email
            $table->morphs('contact'); // makes contact_id | contact_type
            $table->boolean('is_primary')->default(true); //1 yes 0 no
            $table->boolean('is_contactable')->default(false); //1 yes 0 no
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_email');
    }
};