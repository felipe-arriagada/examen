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
<<<<<<< HEAD
            $table->boolean('is_enabled')->default(true);
=======
>>>>>>> 018e7a859f7fd3a09042aa1b24c8afa3cc5fe8a2

        });
    }

    /**
     * Reverse the migrations.
     */
<<<<<<< HEAD
    public function down()
    {
        Schema::table('contacto_rrss', function (Blueprint $table) {
            $table->dropColumn('is_enabled');
        });
=======
    public function down(): void
    {
        Schema::dropIfExists('contacto_rrss');
>>>>>>> 018e7a859f7fd3a09042aa1b24c8afa3cc5fe8a2
    }
};
