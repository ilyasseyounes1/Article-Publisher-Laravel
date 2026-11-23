<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('articles', function (Blueprint $table) {
            if (! Schema::hasColumn('articles', 'title')) {
                $table->string('title')->default('Untitled');
            }

            if (! Schema::hasColumn('articles', 'body')) {
                $table->text('body')->default('');
            }
        });
    }

    public function down(): void
    {
        Schema::table('articles', function (Blueprint $table) {
            $columns = [];

            if (Schema::hasColumn('articles', 'title')) {
                $columns[] = 'title';
            }

            if (Schema::hasColumn('articles', 'body')) {
                $columns[] = 'body';
            }

            if ($columns !== []) {
                $table->dropColumn($columns);
            }
        });
    }
};
