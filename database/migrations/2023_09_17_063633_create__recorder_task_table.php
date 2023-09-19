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
        Schema::create('todos', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id")->constrained()->onDelete('cascade');
            $table->string('title', 40);
            $table->string('detail', 200)->nulllable();
            $table->dateTime('limit')->nullable();
            $table->dateTime('check')->nullable();
        });
        Schema::create('sub_todos', function (Blueprint $table) {
            $table->id();
            $table->foreignId("todo_id")->constrained()->onDelete('cascade');
            $table->string('title', 40);
            $table->string('detail', 200)->nulllable();
            $table->dateTime('limit')->nullable();
            $table->dateTime('check')->nullable();
        });
        Schema::create('progress', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id")->constrained()->onDelete('cascade');
            $table->string('progress', 300);
            $table->dateTime('start_date');
            $table->dateTime('end_date');
        });
        Schema::create('progress_todos', function (Blueprint $table) {
            $table->id();
            $table->foreignId("todo_id")->constrained()->onDelete('cascade');
            $table->foreignId("progress_id")->constrained()->onDelete('cascade');
        });
        Schema::create('progress_sub_todos', function (Blueprint $table) {
            $table->id();
            $table->foreignId("sub_todo_id")->constrained()->onDelete('cascade');
            $table->foreignId("progress_id")->constrained()->onDelete('cascade');
        });
        Schema::create('memo', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id")->constrained()->onDelete('cascade');
            $table->string('comment', 300);
            $table->dateTime('date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_recorder_task');
    }
};
