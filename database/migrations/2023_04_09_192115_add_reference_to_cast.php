<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('movie', function (Blueprint $table) {
            $table->unsignedBigInteger('cast_id');
            $table->foreign('cast_id')
                ->references('id')->on('cast');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('movie', function (Blueprint $table) {
            //
        });
    }
};
