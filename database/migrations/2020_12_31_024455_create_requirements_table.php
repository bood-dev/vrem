<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequirementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requirements', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('checklist_id');
            $table->string('chapter', 100);
            $table->integer('chapter_level');
            $table->string('section', 100);
            $table->integer('section_level');
            $table->text('description');
            $table->integer('description_level');
            $table->boolean('is_security_level_1');
            $table->boolean('is_security_level_2');
            $table->boolean('is_security_level_3');
            $table->text('testing_procedures')->nullable();
            $table->integer('cwe')->nullable();
            $table->string('cwe_link', 150)->nullable();
        });

        Schema::table('requirements', function($table) {
            $table->foreign('checklist_id')->references('id')->on('checklists');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('requirements');
    }
}
