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
        Schema::table('student', function (Blueprint $table) {
            // $table->integer('student_id');
            $table->string('email')->unique()->nullable()->change();
            $table->integer('percentage')->comment('student_percenrage')->change();
            // $table->primary('student_id');
            $table->integer('age')->unsigned()->change();
            $table->string('city')->default('no_city')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('student', function (Blueprint $table) {
            //
        });
    }
};
