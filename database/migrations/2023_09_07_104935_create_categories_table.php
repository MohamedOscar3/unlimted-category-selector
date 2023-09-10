<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string('name',255)->unique()->index();
            $table->unsignedBigInteger('parent_id')->nullable()->index();
            $table->timestamps();
            //create foreign id between parent and child category
            $table->foreign("parent_id")->references("id")->on("categories")->onDelete("cascade");
        });


    }

    public function down()
    {
        Schema::dropIfExists('categories');
    }
};
