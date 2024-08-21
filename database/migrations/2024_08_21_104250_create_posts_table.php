<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // عنوان پست
            $table->text('description'); // توضیحات پست
            $table->string('image_path')->nullable(); // مسیر تصویر
            $table->decimal('price', 10, 2); // قیمت
            $table->timestamps(); // تاریخ ایجاد و به‌روزرسانی
        });
    }

    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
