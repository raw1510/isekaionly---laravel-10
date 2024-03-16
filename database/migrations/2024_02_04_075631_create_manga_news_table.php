<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manga_news', function (Blueprint $table) {
            $table->id();
            $table->string("Manga_title",100);
            $table->text("content",100);
            $table->date("Date",100);
            $table->string("image_url",100);
            $table->string("thumbnail_url",100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('manga_news');
    }
};
