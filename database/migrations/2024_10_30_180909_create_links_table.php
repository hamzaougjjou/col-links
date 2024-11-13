<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLinksTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('links', function (Blueprint $table) {
            $table->id();
            
            $table->string('title');

            $table->foreignId('user_id')->constrained()->cascadeOnDelete(); // Foreign key to users table
            $table->string('path')->unique(); // Shortened path (e.g., 2KrCKI2qrz)
            $table->string('original_url');    // Original URL to redirect to
            $table->unsignedInteger('clicks')->default(0); // Click count
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('links');
    }
}
