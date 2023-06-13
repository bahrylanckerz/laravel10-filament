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
            $table->softDeletes()->after('updated_at');
        });

        Schema::table('countries', function (Blueprint $table) {
            $table->softDeletes()->after('updated_at');
        });

        Schema::table('states', function (Blueprint $table) {
            $table->softDeletes()->after('updated_at');
        });

        Schema::table('cities', function (Blueprint $table) {
            $table->softDeletes()->after('updated_at');
        });

        Schema::table('departments', function (Blueprint $table) {
            $table->softDeletes()->after('updated_at');
        });

        Schema::table('employees', function (Blueprint $table) {
            $table->softDeletes()->after('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });

        Schema::table('countries', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });

        Schema::table('states', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });

        Schema::table('cities', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });

        Schema::table('departments', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });

        Schema::table('employees', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
    }
};
