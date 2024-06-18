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
        Schema::create('runnings', function (Blueprint $table) {
            $table->id();
            $table->timestamp('start_time')->nullable();
            $table->timestamp('end_time')->nullable();
            $table->timestamp('start_at')->nullable();
            $table->timestamp('end_at')->nullable();
            $table->text('distance');
            $table->text('calorie_burn');
            $table->text('weather');
            $table->foreignId('user_id')->nullable()->index();
            $table->foreignId('activity_id')->nullable()->index();
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
        Schema::dropIfExists('runnings');
    }
};
