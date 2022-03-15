<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppoinmnetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appoinmnets', function (Blueprint $table) {
            $table->id();
            $table->integer('appointment_no');

            $table->date('appointment_date');
            $table->foreignId('doctor_id')
                ->references('id')
                ->on('doctors')
                ->onDelete('cascade');
            $table->string('patient_name');
            $table->integer('patient_phone');
            $table->integer('total_fee');
            $table->integer('paid_amount');
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
        Schema::dropIfExists('appoinmnets');
    }
}
