<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIrDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ir_detail', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ir_id')->constrained('ir');
            $table->string('bank_type');
            $table->string('bank_owner');
            $table->string('proof_url');
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
        Schema::dropIfExists('ir_detail');
    }
}
