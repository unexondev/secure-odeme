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
        Schema::create('cashout_requests', function (Blueprint $table) {
            $table->uuid("id");
            $table->uuid("owner_id")->nullable(false);
            $table->string("receiver_address")->nullable(false);
            $table->float("amount", 9, 7)->nullable(false);
            $table->string("transaction_id")->nullable();
            $table->boolean("completed")->default(false)->nullable(false);
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
        Schema::dropIfExists('cashout_requests');
    }
};
