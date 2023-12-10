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
            $table->uuid();
            $table->string('name', 191);
            $table->string('email', 191);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password', 191);
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
            /**
             * Index
             */
            $table->renameIndex('users_pkey', 'PK_user_id');
            $table->index('id', 'IX_user_id');
            $table->index('uuid', 'IX_user_uuid');
            $table->unique('email', 'UQ_user_email');

        });
        //DB::statement('ALTER TABLE users ALTER COLUMN uuid SET DEFAULT uuid_generate_v4();');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
