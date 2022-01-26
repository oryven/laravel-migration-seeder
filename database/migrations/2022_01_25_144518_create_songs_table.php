<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('songs', function (Blueprint $table) {
            $table->id();

            $table -> string('title', 60) -> unique();
            $table -> integer('duration') -> unsigned();
            $table -> text('lyric');
            $table -> integer('price') -> unsigned();
            $table -> string('genre', 20);
            $table -> tinyInteger('rating') -> unsigned() -> default(0);
            $table -> boolean('explicit') -> default(false);
            $table -> boolean('single') -> default(false);

            $table -> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('songs');
    }
}
