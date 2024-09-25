<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('footers', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('facebook');
            $table->string('instagram');
            $table->string('youtube');
            $table->string('phone_fax');
            $table->text('address');
            $table->string('whatsapp');
            $table->text('working_hours');
            $table->longText('google_maps_embed');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::table('footers', function (Blueprint $table) {
            $table->longText('google_maps_embed');
        });
    }
};