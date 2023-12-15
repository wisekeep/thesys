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
            $table->foreignId('tenant_id')->constrained('tenants', 'id', 'FK_profile_tenant_id');
            $table->foreignId('user_id')->constrained('users', 'id', 'FK_profile_user_id');
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
            $table->renameIndex('profiles_pkey', 'PK_profile_id');
            $table->index('id', 'IX_profile_id');
            $table->unique('user_id', 'UQ_user_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
