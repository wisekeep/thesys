<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->uuid();
            $table->unsignedInteger('tenant_id')->index();
            $table->unsignedInteger('user_id')->index();
            $table->unsignedInteger('profile_id')->index();
            $table->unsignedInteger('status_id')->index();
            $table->unsignedInteger('setting_id')->index();
            $table->timestamps();
            $table->softDeletes();
            /**
             * Index
             */
            // $table->renameIndex('settings_pkey', 'PK_setting_id');
            // $table->index('id', 'IX_setting_id');
            // $table->index('uuid', 'IX_setting_uuid');

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
}
