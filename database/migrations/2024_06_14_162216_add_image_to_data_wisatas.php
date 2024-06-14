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
        Schema::table('data_wisatas', function (Blueprint $table) {
            //
            $table->text('image')->after('title');
            $table->text('imgheader')->after('readmore');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('data_wisatas', function (Blueprint $table) {
            //
            $table->dropColumn('image');
            $table->dropColumn('imgheader');
        });
    }
};
