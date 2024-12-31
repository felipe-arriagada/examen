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
        Schema::create('informacion_basica', function (Blueprint $table) {
            $table->id(); 
            $table->string('logo_url')->nullable(); 
            $table->string('company_name')->nullable();
            $table->text('description')->nullable();
            $table->json('seo_keywords')->nullable();
            $table->json('main_menu')->nullable();
            $table->boolean('is_enabled')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('informacion_basica', function (Blueprint $table) {
            $table->dropColumn('is_enabled');
        });
    }
};
