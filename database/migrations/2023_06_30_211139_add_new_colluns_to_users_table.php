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
            $table->string('nivel');
            $table->string('matricula');
            $table->string('bpmm');
            $table->string('status');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('nivel');
            $table->dropColumn('matricula');
            $table->dropColumn('bpmm');
            $table->dropColumn('status');
        });
    }
};
