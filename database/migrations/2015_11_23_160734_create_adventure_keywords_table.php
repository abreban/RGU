<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdventureKeywordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adventure_keywords', function (Blueprint $table) {

            $table->integer('keyword_id')->unsigned();
            $table->integer('adventure_id')->unsigned();
            $table->timestamps();

            $table->foreign('keyword_id')->references('id')->on('keywords')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('adventure_id')->references('id')->on('adventures')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->primary(['keyword_id', 'adventure_id']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('adventure_keywords');
    }
}
