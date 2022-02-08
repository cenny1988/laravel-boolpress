<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();

            $table->string('title')->unique();
            $table->string('sub_title', 150)->unique();
            $table->string('author', 60);
            $table->unsignedBigInteger('likes')->default(0);
            $table->string('place')->nullable();
            $table->string('img')->nullable();
            $table->text('content')->nullable();

            $table->unsignedBigInteger('category_id');
            
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
        Schema::dropIfExists('posts');
    }
}
