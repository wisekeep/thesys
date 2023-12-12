<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        switch (DB::connection()->getPDO()->getAttribute(PDO::ATTR_DRIVER_NAME)) {

            case 'pgsql':

                DB::statement('CREATE EXTENSION IF NOT EXISTS "uuid-ossp"');

                break;

            case 'sqlite':

                //sqlite syntax
                break;

            case 'mysql':

                //mysql syntax
                break;

            default:

                break;
        }
    }

    public function down(): void
    {
        switch (DB::connection()->getPDO()->getAttribute(PDO::ATTR_DRIVER_NAME)) {

            case 'pgsql':

                DB::statement('DROP EXTENSION IF EXISTS "uuid-ossp";');

                break;

            case 'sqlite':

                //sqlite syntax
                break;

            case 'mysql':

                //mysql syntax
                break;

            default:

                break;
        }
    }
};
