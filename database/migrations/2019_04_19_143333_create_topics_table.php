<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTopicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('topics', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->longText('content');
            $table->string('cover');
            $table->longText('markdown_content');
            $table->unsignedInteger('user_id')->index();
            $table->unsignedInteger('category_id')->index();
            $table->unsignedInteger('reply_count')->default(0);
            $table->unsignedInteger('view_count')->default(0);
            $table->unsignedInteger('last_reply_user_id')->default(0);
            $table->unsignedInteger('order')->default(0);
            $table->text('excerpt')->nullable();
            $table->string('slug')->nullable();
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
        Schema::dropIfExists('topics');
    }
}
