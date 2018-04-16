<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Cviebrock\EloquentSluggable\Sluggable;

class AddSlug extends Migration
{
    /* 
     * Run the migrations.
     *
     * @return void     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->string('slug');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(Blueprint $table)
    {
        $table->dropColumn('slug');
    }
}
