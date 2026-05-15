<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSiteColumn extends Migration
{
    public function up()
    {
        Schema::table('wink_posts', function (Blueprint $table) {
            $table->string('site')->nullable()->after('id');
        });

        Schema::table('wink_tags', function (Blueprint $table) {
            $table->string('site')->nullable()->after('id');
        });

        Schema::table('wink_pages', function (Blueprint $table) {
            $table->string('site')->nullable()->after('id');
        });
    }

    public function down()
    {
        Schema::table('wink_posts', function (Blueprint $table) {
            $table->dropColumn('site');
        });

        Schema::table('wink_tags', function (Blueprint $table) {
            $table->dropColumn('site');
        });

        Schema::table('wink_pages', function (Blueprint $table) {
            $table->dropColumn('site');
        });
    }
}
