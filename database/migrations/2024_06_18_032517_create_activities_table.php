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
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->string('act_name');
            $table->timestamps();
            $table->softDeletes();
            $table->foreignId('create_by')->comment('สร้างโดย user_id')->nullable();
            $table->foreignId('update_by')->comment('แก้ไขโดย user_id')->nullable();
            $table->foreignId('delete_by')->comment('ลบโดย user_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activities');
    }
};
