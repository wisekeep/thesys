<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->uuid();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('profile_image', 191)->nullable();
            $table->string('profile_cpf', 40)->nullable();
            $table->string('profile_rg', 40)->nullable();
            $table->string('profile_rg_emit', 40)->nullable();
            $table->date('profile_birthday')->nullable();
            $table->string('profile_email', 191)->nullable();
            $table->string('profile_address', 191)->nullable();
            $table->string('profile_number', 40)->nullable();
            $table->string('profile_neighborhood', 40)->nullable();
            $table->string('profile_city', 40)->nullable();
            $table->string('profile_estate', 40)->nullable();
            $table->string('profile_country', 40)->nullable();
            $table->string('profile_cep', 10)->nullable();
            $table->string('profile_telephone1', 15)->nullable();
            $table->string('profile_telephone2', 15)->nullable();
            $table->string('profile_telephone3', 15)->nullable();
            $table->string('profile_telephone4', 15)->nullable();
            $table->longText('profile_obs')->nullable();
            $table->binary('profile_file')->nullable();
            $table->timestamps();
            $table->softDeletes();
            /**
             * Index
             */
            $table->foreign('user_id', 'FK_profiles_users')
                ->references('id')
                ->on('users')
                ->onUpdate('RESTRICT')
                ->onDelete('RESTRICT');
            $table->renameIndex('profiles_pkey', 'PK_profile_id');
            $table->index('id', 'IX_profile_id');
            $table->index('uuid', 'IX_profile_uuid');
            $table->unique('user_id', 'UQ_user_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
