<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->comment('タイトル');
            $table->text('detail')->comment('詳細説明');
            $table->text('code')->comment('コード');
            $table->text('style')->comment('スタイル');
            $table->bigInteger('subject_id')->unsigned()->comment('科目ID'); // 変更
            $table->foreign('subject_id')->references('id')->on('subject_master');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
