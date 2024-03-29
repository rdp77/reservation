<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->dateTime('datetime');
            $table->foreignId('room');
            $table->foreignId('details');
            $table->enum('package', [
                'PAKET NGERII', 'PAKET NGGRAGAS "A"',
                'PAKET NGGRAGAS "B"', 'PAKET NGGRAGAS "C"',
                'PAKET NGGRAGAS "D"', 'PAKET NGGRAGAS "E"'
            ]);
            $table->enum('check_out', ['Iya', 'Tidak']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservation');
    }
}
