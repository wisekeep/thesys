<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->uuid();
            $table->boolean('company_active')->default(true);
            $table->boolean('company_is_parent')->default(false);
            $table->unsignedBigInteger('company_parent_id');
            $table->string('company_federal_register', 40)->nullable();
            $table->string('company_state_register', 40)->nullable();
            $table->string('company_municipal_register', 40)->nullable();
            $table->string('company_name', 191);
            $table->string('company_business_name', 191)->nullable();
            $table->string('company_address', 191)->nullable();
            $table->string('company_number', 40)->nullable();
            $table->string('company_email', 191)->nullable();
            $table->text('company_obs')->nullable();
            $table->binary('company_file')->nullable();
            $table->timestamps();
            $table->softDeletes();
            /**
             * Index
             */
            $table->foreign('company_parent_id', 'FK_company_parent_id')
                ->references('id')
                ->on('companies');
            $table->renameIndex('companies_pkey', 'PK_company_id');
            $table->index('id', 'IX_company_id');
            $table->index('uuid', 'IX_company_uuid');
            $table->unique('company_email', 'UQ_company_email');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
