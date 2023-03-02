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
        Schema::create('links', function (Blueprint $table) {
            $table->id("id");
            $table->uuid("owner_id")->nullable(false);
            $table->integer("service")->nullable(false);
            $table->string("url")->nullable(false);
            $table->float('earn', 9, 7)->default(0.0)->nullable(false);
            $table->integer("views")->default(0)->nullable(false);
            $table->json("product_info")->nullable(false);
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
        Schema::dropIfExists('links');
    }
};
