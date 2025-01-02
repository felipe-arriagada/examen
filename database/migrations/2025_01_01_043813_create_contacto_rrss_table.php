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
        Schema::create('contacto_rrss', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('instagram')->nullable();
            $table->string('telefono')->nullable();
            $table->boolean('is_enabled')->default(true);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('contacto_rrss', function (Blueprint $table) {
            $table->dropColumn('is_enabled');
        });
    }
};
