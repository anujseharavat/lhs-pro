<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserMapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_semester_maps', function (Blueprint $table) {
            $table->integer('user_id');
            $table->integer('semester_id');
            $table->string('status')->default('Not Started');
            $table->string('comment')->default('');
            $table->timestamps();
            $table->unique(['user_id', 'semester_id']);
        });
        Schema::create('user_subject_maps', function (Blueprint $table) {
            $table->integer('user_id');
            $table->integer('subject_id');
            $table->string('status')->default('Not Started');
            $table->string('comment')->default('');
            $table->timestamps();
            $table->unique(['user_id', 'subject_id']);
        });
        Schema::create('user_lesson_maps', function (Blueprint $table) {
            $table->integer('user_id');
            $table->integer('lesson_id');
            $table->string('status')->default('Not Started');
            $table->string('comment')->default('');
            $table->timestamps();
            $table->unique(['user_id', 'lesson_id']);
        });
        Schema::create('user_test_maps', function (Blueprint $table) {
            $table->integer('user_id');
            $table->integer('test_id');
            $table->string('status')->default('Not Started');
            $table->string('comment')->default('');
            $table->timestamps();
            $table->unique(['user_id', 'test_id']);
        });
        Schema::create('user_exam_maps', function (Blueprint $table) {
            $table->integer('user_id');
            $table->integer('exam_id');
            $table->string('status')->default('Not Started');
            $table->string('comment')->default('');
            $table->timestamps();
            $table->unique(['user_id', 'exam_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_semester_maps');
        Schema::dropIfExists('user_subject_maps');
        Schema::dropIfExists('user_lesson_maps');
        Schema::dropIfExists('user_test_maps');
        Schema::dropIfExists('user_exam_maps');
    }
}
