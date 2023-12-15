<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDomainsTable extends Migration
{
    public function up(): void
    {
        Schema::create('domains', function (Blueprint $table) {
            //$table->increments('id');
            $table->id();
            $table->uuid();
            $table->string('domain', 191)->nullable();
            $table->unsignedBigInteger('tenant_id')->nullable();
            //$table->foreignId('tenant_id')->constrained('tenants', 'id', 'FK_domain_tenant_id');
            $table->timestamps();
            $table->softDeletes();
            /**
             * Index
             */
            $table->renameIndex('domains_pkey', 'PK_domain_id');
            $table->unique('domain', 'UQ_domain');

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('domains');
    }
}
