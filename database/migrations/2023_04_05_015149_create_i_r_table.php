<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIRTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ir', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->integer('total_amount');
            $table->integer('ir');
            $table->integer('siar_siar');
            $table->integer('jimpitan');
            $table->integer('mubaligh');
            $table->integer('kas_duafa');
            $table->integer('penghormatan_tamu');
            $table->integer('dana_kesehatan');
            $table->integer('pembelaan_gayungan');
            $table->integer('dana_kematian');
            $table->integer('perawatan_wisma_tamu');
            $table->enum('status', ['pending', 'paid', 'confirmed'])->default('pending');
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
        Schema::dropIfExists('i_r_s');
    }
}
