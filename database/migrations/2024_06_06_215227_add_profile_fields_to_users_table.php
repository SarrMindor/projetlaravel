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
        Schema::table('users', function (Blueprint $table) {
            //
            $table->string('biography')->nullable();
            $table->string('profile_image')->nullable();
            $table->string('phone_number')->nullable();
            // Ajoutez d'autres champs au besoin
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->dropColumn('biography');
            $table->dropColumn('profile_image');
            $table->dropColumn('phone_number');
            // Supprimez d'autres champs ajoutés
        });
    }
};
