<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('description');
            $table->string('addon');
            $table->string('subjects');
            $table->string('semesters');
            $table->float('price');
            $table->timestamps();
        });
        DB::table('product')->insert([
            'name' => 'LHS Intro Package',
            'description' => '7 IGCSE Subjects With 1EA-Csr',
            'addon' => '4 Pre IGCSE',
            'subjects' => '7',
            'semesters' => '3',
            'price' => '99',
        ]);
        DB::table('product')->insert([
            'name' => 'Toddler IGCSE',
            'description' => 'Rhymes, Letter, Maths',
            'addon' => 'game',
            'subjects' => '3',
            'semesters' => '1',
            'price' => '39',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
}
