<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountdownsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countdowns', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // عنوان شمارشگر معکوس
            $table->timestamp('end_at'); // زمان پایان شمارش معکوس
            $table->enum('status', ['amazing', 'bestseller', 'popular', 'hot'])->default('popular');
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
        Schema::dropIfExists('countdowns');
    }
}
