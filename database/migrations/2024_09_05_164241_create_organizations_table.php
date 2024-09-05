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
            $table->string('logo');
            $table->unsignedSmallInteger('category'); 
            $table->string('description');
            $table->string('adviser');
            $table->string('president');
            $table->string('vice_president');
            $table->string('officers');
            $table->string('by_laws');
            $table->string('letter_adviser');
            $table->string('accomplishment');
            $table->string('coa');
            $table->string('financial_report');
            $table->string('verification');
            $table->unsignedSmallInteger('created_by');
            $table->timestamps(); 
        });
    }

  
    public function down(): void
    {
        Schema::dropIfExists('organizations');
    }
};
