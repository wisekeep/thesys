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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->uuid()->index('uk_company_uuid');
            $table->boolean('company_active')->default(true);
            $table->boolean('company_is_parent')->default(false);
            $table->bigInteger('company_parent_id')->unsigned();
            $table->string('company_federal_register', 40)->nullable();
            $table->string('company_state_register', 40)->nullable();
            $table->string('company_municipal_register', 40)->nullable();
            $table->string('company_name', 191);
            $table->string('company_business_name', 191)->nullable();
            $table->string('company_address', 191)->nullable();
            $table->string('company_number', 40)->nullable();
            $table->string('company_email', 191)->unique('uk_company_email')->nullable();
            $table->text('company_obs')->nullable();
            $table->binary('company_file')->nullable();
            $table->timestamps();
            $table->softDeletes();
            // Foreign Key Constraints
            $table->foreign('company_parent_id')
                ->references('id')
                ->on('companies');
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
