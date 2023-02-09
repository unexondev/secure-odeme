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
        Schema::create('payments', function (Blueprint $table) {
            $table->uuid("id");
            $table->uuid("owner_id")->nullable(false);
            $table->uuid("link_id")->nullable(false);
            $table->integer("amount")->nullable(false);
            $table->boolean("verified")->default(false)->nullable(false);
            $table->uuid("to_bank")->nullable(false);
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
        Schema::dropIfExists('payments');
    }
};
