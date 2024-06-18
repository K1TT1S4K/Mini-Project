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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            // $table->boolean('is_admin')->nullable();
            $table->text('gender');//->nullable();
            $table->string('height');//->nullable();
            $table->string('weight');//->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('plan_id')->nullable()->index();
            $table->foreignId('status_id')->nullable()->index();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
            $table->timestamps();
            $table->foreignId('created_by')->comment('สร้างโดย user_id')->nullable();
            $table->foreignId('updated_by')->comment('แก้ไขโดย user_id')->nullable();
            $table->foreignId('deleted_by')->comment('ลบโดย user_id')->nullable();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
