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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title'); //Название статьи
            $table->string('content'); //Сообщение: может содержать как текст, так и медиа (картинки или видео)
            $table->integer('user_id')->unsigned(); //Автор сообщения

            $table->timestamps(); //дата создания и изменения
            $table->softDeletes(); //дата удаления

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs');
    }
};
