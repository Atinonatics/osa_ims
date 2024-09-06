<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('organizations', function (Blueprint $table) {
            $table->id('organization_id'); 
            $table->string('name');
            $table->string('logo')->nullable();
            $table->unsignedBigInteger('category'); 
            $table->string('description');
            $table->string('adviser')->nullable();
            $table->string('president')->nullable();
            $table->string('vice_president')->nullable();
            $table->string('officers')->nullable();
            $table->string('by_laws')->nullable();
            $table->string('letter_adviser')->nullable();
            $table->string('accomplishment')->nullable();
            $table->string('coa')->nullable();
            $table->string('financial_report')->nullable();
            $table->string('verification')->nullable();
            $table->enum('is_national', [0, 1])->nullable();
            $table->unsignedSmallInteger('created_by')->nullable();
            $table->timestamps(); 

            // $table->foreign('category')->references('id')->on('category');
        });
    }

  
    public function down(): void
    {
        Schema::dropIfExists('organizations');
    }
};
