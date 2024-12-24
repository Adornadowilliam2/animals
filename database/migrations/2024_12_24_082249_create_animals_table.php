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
               
        Schema::create('animal_types', function (Blueprint $table) {
            $table->id(); 
            $table->string('animal_type_name');
            $table->timestamps();
        });

        
        Schema::create('animals', function (Blueprint $table) {
            $table->id(); 
            $table->string('name');
            $table->unsignedBigInteger('animal_type_id'); 
            $table->foreign('animal_type_id')
                  ->references('id')
                  ->on('animal_types')
                  ->onDelete('cascade'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animals');
        Schema::dropIfExists('animal_types');
    }
};
