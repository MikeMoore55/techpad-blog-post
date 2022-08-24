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
        Schema::create('blog-post', function (Blueprint $table) {
            $table->id();
            $table->text("blog_title");
            $table->text("blog_subtitle");
            $table->text("blog_author");
            $table->text("blog_main_img");
            $table->text("blog_intro");
            $table->text("blog_body1");
            $table->text("body1_img");
            $table->text("blog_body2");
            $table->text("body2_img");
            $table->text("blog_body3");
            $table->text("body3_img");
            $table->text("blog_conclusion");
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
        Schema::dropIfExists('blog-post');
    }
};
