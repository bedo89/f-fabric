<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDesignCommentsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('design_comments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('design_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->text('content');

            $table->foreign('design_id')->references('id')->on('designs');
            $table->foreign('user_id')->references('id')->on('users');

            $table->nullableTimestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('design_comments');
    }

}
