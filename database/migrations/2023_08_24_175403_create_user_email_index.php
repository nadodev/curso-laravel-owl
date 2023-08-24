<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        DB::unprepared("CREATE UNIQUE INDEX user_email_index ON users (email_active)");
    }

    public function down()
    {
        Schema::table('users', function(Blueprint $table) {
            $table->dropIndex('user_email_index');
        });
    }
};
