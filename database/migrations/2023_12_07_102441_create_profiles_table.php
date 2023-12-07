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
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->string('profile_image')->nullable();
            $table->string('profile_cpf', 40)->nullable();
            $table->string('profile_rg', 40)->nullable();
            $table->string('profile_rg_emit', 40)->nullable();
            $table->date('profile_birthday')->nullable();
            //$table->string('profile_email',191)->unique('uk_profile_email')->nullable();
            $table->string('profile_email', 191)->nullable();
            $table->string('profile_address')->nullable();
            $table->string('profile_number', 40)->nullable();
            $table->string('profile_neighborhood', 40)->nullable();
            $table->string('profile_city', 40)->nullable();
            $table->string('profile_estate', 2)->nullable();
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
            $table->foreign('user_id', 'fk_profiles_users')
                ->references('id')
                ->on('users')
                ->onUpdate('RESTRICT')
                ->onDelete('RESTRICT');
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
