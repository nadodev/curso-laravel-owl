<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        DB::unprepared('CREATE UNIQUE INDEX user_email_index ON users (email) WHERE deleted_at is NULL;');
    }

    public function down(): void
    {
        Schema::dropIfExists('user_email_index');
    }
};
