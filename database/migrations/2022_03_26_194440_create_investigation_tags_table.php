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
        Schema::create('investigation_tags', function (Blueprint $table) {
            $table->id();
            $table->foreignId("investigation_id")->references("id")->on("investigations");
            $table->foreignId("tag_id")->references("id")->on("tags");
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
        Schema::dropIfExists('investigation_tags');
    }
};
