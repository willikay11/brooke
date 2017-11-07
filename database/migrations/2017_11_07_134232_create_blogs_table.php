<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('image')->nullable();
            $table->timestamps();
        });

        Schema::create('blog_translations', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('blog_id')->unsigned();
            $table->string('locale');
            $table->boolean('status')->default(0);
            $table->string('title');
            $table->string('slug')->nullable();
            $table->text('summary');
            $table->text('body');
            $table->timestamps();
            $table->unique(['blog_id', 'locale']);
            $table->unique(['locale', 'slug']);
            $table->foreign('blog_id')->references('id')->on('blogs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('blog_translations');
        Schema::drop('blogs');
    }
}
