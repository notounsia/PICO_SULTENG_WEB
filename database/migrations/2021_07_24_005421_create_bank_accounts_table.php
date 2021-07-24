<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBankAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("bank_accounts", function (Blueprint $table) {
            $table->id();
            $table->foreignId("bank_id")->constrained("banks", "id");
            $table->string("accountable_type");
            $table->unsignedBigInteger("accountable_id");
            $table->string("account_number");
            $table->string("account_name");
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
        Schema::dropIfExists("bank_accounts");
    }
}