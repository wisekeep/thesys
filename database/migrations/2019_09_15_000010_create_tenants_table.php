<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTenantsTable extends Migration
{
    public function up(): void
    {
        Schema::create('tenants', function (Blueprint $table) {
            $table->id();
            //$table->string('id')->primary();
            $table->uuid();
            $table->boolean('tenant_active')->default(true);
            $table->boolean('tenant_is_parent')->default(false);
            $table->unsignedBigInteger('tenant_parent_id');
            $table->string('tenant_federal_register', 40)->nullable();
            $table->string('tenant_state_register', 40)->nullable();
            $table->string('tenant_municipal_register', 40)->nullable();
            $table->string('tenant_name', 191);
            $table->string('tenant_business_name', 191)->nullable();
            $table->string('tenant_address', 191)->nullable();
            $table->string('tenant_number', 40)->nullable();
            $table->string('tenant_email', 191)->nullable();
            $table->text('tenant_obs')->nullable();
            $table->binary('tenant_file')->nullable();
            $table->json('tenant_data')->nullable();
            $table->timestamps();
            $table->softDeletes();
            /**
             * Index
             */
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tenants');
    }
}
