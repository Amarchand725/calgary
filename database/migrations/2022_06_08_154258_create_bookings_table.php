<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('service_id')->nullable();
            $table->string('name');
            $table->string('email');
            $table->string('date_time')->nullable();
            $table->text('description')->nullable();
            $table->integer('status')->default(0)->comment('0=pending, 1=confirmed, 2:completed, 3:rejected');
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
        Schema::dropIfExists('bookings');
    }
}
