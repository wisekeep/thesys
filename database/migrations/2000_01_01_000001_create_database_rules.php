<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // try {
        //     DB::connection()->getPDO();
        //     echo DB::connection()->getPDO()->getAttribute(PDO::ATTR_DRIVER_NAME);
        // } catch (\Exception $e) {
        //     echo $e;
        // }

        // if (DB::connection()->getPdo()->getAttribute(PDO::ATTR_DRIVER_NAME) == 'pgsql') {
        //     echo "Running on pgsql; doing something pgsql specific here\n";
        // }

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

    /**
     * Reverse the migrations.
     */
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
